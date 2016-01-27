<?php 
class Profile_model extends CI_Model{
		
	/*-------------------------------House details-----------------------------------------------------*/
	function show_all_houses(){
	$query = $this->db->get('house_details');
	$query_result = $query->result();
	return $query_result;
	}
	// Function To Fetch Selected House Record
	function show_particular_house($dataf){
	$this->db->select('*');
	$this->db->from('house_details');
	$this->db->where('house_id', $dataf);
	$query = $this->db->get();
	$result = $query->result();
	return $result;
	}

	/*add a house to the database*/
	function add_a_house($house=NULL){
	$this->db->insert('house_details', $house);
	return $this->db->insert_id();
    }


    /*this function gets a list of all houses in the datbase*/
	function get_houses(){
	$this->db->select('*');
	$this->db->from('house_details');
	$query = $this->db->get();
	return $query->result();
    }

    /*this function updates data of a particular house given its id*/
	function update_house($hid,$hdata){
    $this->db->where('house_id', $hid);
    $this->db->update('house_details', $hdata);
	}


	function get_house_with_id($dataf){
	$this->db->select('house_id');
	$this->db->from('house_details');
	$this->db->where('funding_agency_name', $dataf);
	$query = $this->db->get();
	$result = $query->row()->house_id;
	return $result;
	}


	// GET THE PICTURE OF THE HOUSE SELECTED
    function get_picture_of_selected_house_id($house_id)
    {
        $this->db->select('photo1');
        $this->db->from('house_details');
        $this->db->where('house_id', $house_id);
        $query = $this->db->get();
        $result = $query->row()->photo1;
        return $result;
    }



	/*---------------------------------------------------------------------------------------------------*/

} 
?>

