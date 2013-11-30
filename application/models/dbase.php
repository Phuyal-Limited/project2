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


}

?>