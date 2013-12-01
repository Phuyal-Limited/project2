<?php

class Dbase extends CI_Model{
	//get the image details
	public function get_Image_Details($image_id){
		$details = array();
		if($image_id == ''){
			return $details;
		}
		if($image_id == 0){
			return $details;
		}
		$id_array = explode(', ', $image_id);
		
		for($i=0;$i<sizeof($id_array);$i++){
			$img_id = $id_array[$i];

			$this->db->where('image_id', $img_id);
			$image_details = $this->db->get('images');
			$image_details = $image_details->result();
			array_push($details, $image_details[0]);
		}
		return $details;
	}

	//get template details and room details with room id
	public function get_Template_Room_Details($room_id){
		$ids = explode(",", $room_id);
		$room_details = array();
		$template_details = array();
		$template_id_list = array();
		for ($i=0; $i <sizeof($ids) ; $i++) { 
			$this->db->where('room_id', $ids[$i]);
			$details = $this->db->get('room');
			$details = $details->result();
			array_push($room_details, get_object_vars($details[0]));
		}
		
		foreach ($room_details as $value) {
			$template_id = $value['template_id'];
			array_push($template_id_list, $template_id);
			$this->db->where('template_id', $template_id);
			$details = $this->db->get('room_templates/standards');
			$details = $details->result();
			array_push($template_details, get_object_vars($details[0]));
		}
		$vals = array_count_values($template_id_list);
		$get_Details = array();
		$checkout_details = array();
		foreach ($vals as $key => $value) {
			foreach ($template_details as $eachTemplate) {
				if($key == $eachTemplate['template_id']){
					$get_Details['template_name'] = $eachTemplate['name'];
					$get_Details['no_of_rooms'] = $value;
					$get_Details['rate'] = $eachTemplate['rate'];
					$get_Details['total'] = $value * $eachTemplate['rate'];
					array_push($checkout_details, $get_Details);
					break;
				}
			}
		}

		return $checkout_details;
	}

}

?>