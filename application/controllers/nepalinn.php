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
		if($this->session->userdata['searchInfo']){
			$this->session->unset_userdata('searchInfo');
		}
		$this->session->set_userdata('searchInfo',$search_info);
	}

	public function details()
	{
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
		$data['title'] = 'Nepalinn | Checkout';
		$this->load->view('header', $data);
		$this->load->view('checkout');
		$this->load->view('footer');
	}
}
