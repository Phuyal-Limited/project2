<?php
class Guest extends CI_Model{
	
	/*Function to add guest details to the database
	  Takes in an array of guest details as parameter
	  and returns the ID of the guest added 
	  By: Bidur Subedi
	  Dec 01, 2013*/
	public function add_guest($guest_det){
		$this->db->insert('guest',$guest_det);
		$this->db->select('guest_id');
		$this->db->order_by('guest_id','desc');
		$this->db->limit(1);
		$id=$this->db->get('guest');
		$id=$id->result();
		$id=get_object_vars($id[0]);
		$id=$id['guest_id'];
		return $id;
	}

	/*Function to add payment details to the database
	  Takes in an array of payment details as parameter
	  and returns the ID of the payment added 
	  By: Bidur Subedi
	  Dec 01, 2013*/
	public function add_payment($payment_details){
		$this->db->insert('payment',$payment_details);
		$this->db->select('payment_id');
		$this->db->order_by('payment_id','desc');
		$this->db->limit(1);
		$id=$this->db->get('payment');
		$id=$id->result();
		$id=get_object_vars($id[0]);
		$id=$id['payment_id'];
		return $id;
	}


}
?>