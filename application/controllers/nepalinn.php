<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nepalinn extends CI_Controller {

	//Controller for Home page	
	public function index()
	{
		$data['title'] = 'Nepalinn | Home';
		$data['today'] = date('Y-m-d');
		$data['tomorrow'] = date('Y-m-d', time()+86400);
		$this->load->view('header', $data);
		$this->load->view('home',$data);
		$this->load->view('footer');
	}

	public function result()
	{
		$data['title'] = 'Nepalinn | Search Result';
		$this->load->helper('text');
		if($this->input->post()){
			$this->_update_session($this->input->post());
		}
		else if(!($this->session->userdata('searchInfo'))){
			redirect('index');
		}
		$searchInfo=$this->session->userdata('searchInfo');
		$result=$this->rooms->get_available_hotels($searchInfo['city'],$searchInfo['checkInDate'],$searchInfo['checkOutDate']);
		$result_details = array();
		foreach ($result as $aResult) {
			$id=$aResult['id'];
			$desc=$this->booking->get_hotel_details($id);
			$desc[0] = get_object_vars($desc[0]);
			$desc[0]['description']=word_limiter($desc[0]['description'],28);
			$desc[0]['rate']=$this->rooms->get_start_price($id);
			if($desc[0]['default_imgid'] != 0){
				$image_det=$this->dbase->get_Image_Details($desc[0]['default_imgid']);
				$image_det=get_object_vars($image_det[0]);
			}
			else{
				$image_det = array('path' => '', 'alt' => 'No Image');
			}
			$desc[0]['image']=$image_det;
			array_push($result_details, $desc[0]);
		}
		$data['searchInfo']=$searchInfo;
		$data['result']=$result_details;
		$this->load->view('header', $data);
		$this->load->view('result', $data);
		$this->load->view('footer');
	}

	private function _update_session($search_info){
		if(!(isset($search_info['city']))){
			$current_info=$this->session->userdata('searchInfo');
			$current_info['checkInDate']=$search_info['checkInDate'];
			$current_info['checkOutDate']=$search_info['checkOutDate'];
			$search_info=$current_info;
		}
		else if($this->session->userdata['searchInfo']){
			$this->session->unset_userdata('searchInfo');
		}
		$this->session->set_userdata('searchInfo',$search_info);
	}

	public function details()
	{
		if(!($this->uri->segment(2)))
			redirect ('index');
		if($this->input->post('changeDate')){
			$searchInfo=$this->input->post();
			$this->_update_session($searchInfo);
		}
		$hotel_id = $this->uri->segment(2);
		$searchInfo=$this->session->userdata('searchInfo');

		$desc=$this->booking->get_hotel_details($hotel_id);
		$desc[0] = get_object_vars($desc[0]);
		$desc[0]['rate']=$this->rooms->get_start_price($hotel_id);
		if($desc[0]['default_imgid'] != 0){
			$image_det=$this->dbase->get_Image_Details($desc[0]['default_imgid']);
			$image_det=get_object_vars($image_det[0]);
		}
		else{
			$image_det = array('path' => '', 'alt' => 'No Image');
		}
		$desc[0]['image']=$image_det;
		$data['hotelInfo']=$desc[0];
		$data['checkInDate'] = $searchInfo['checkInDate'];
		$data['checkOutDate'] = $searchInfo['checkOutDate'];

		$data['hotel_facilities'] = $this->booking->get_hotel_facilities($hotel_id);
		$data['available_rooms'] = $this->rooms->get_available_rooms($hotel_id, $searchInfo['checkInDate'], $searchInfo['checkOutDate']);
		$data['hotel_id'] = $hotel_id;
		$data['title'] = 'Nepalinn | Search Result';
		$this->load->view('header', $data);
		$this->load->view('details');
		$this->load->view('footer');
	}

	public function test(){
		$available=$this->rooms->get_start_price(1);
		echo "<pre>";
		echo ($available);
	}

	public function checkout()
	{
		if($this->input->post('submit')==false){
			redirect('index');
		}else{
			$data['title'] = 'Nepalinn | Checkout';
			$searchInfo=$this->session->userdata('searchInfo');
			$data['checkInDate'] = $searchInfo['checkInDate'];
			$data['checkOutDate'] = $searchInfo['checkOutDate'];
			$data['noOfDays']=(strtotime($data['checkOutDate'])-strtotime($data['checkInDate']))/86400;
			$hotel_id = $this->input->post('hotel_id');
			$room_ids = $this->input->post('room_id');
			$desc=$this->booking->get_hotel_details($hotel_id);
			$desc[0] = get_object_vars($desc[0]);
			$data['hotel_details']=$desc[0];
			$data['checkout_details'] = $this->dbase->get_Template_Room_Details($room_ids);
			$total=0;
			foreach ($data['checkout_details'] as $details)
				$total += $details['total'];

			$data['total']=$total;
			$data['grand_tot']=$total * $data['noOfDays'];
			$data['deposit'] = 0.2 * $data['grand_tot'];
			$this->load->view('header', $data);
			$this->load->view('checkout');
			$this->load->view('footer');
		}
	}
}
