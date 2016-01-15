<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class profile extends CI_Controller {

	
	    function __construct()
    {
        parent::__construct();

        $this->load->model('profile_model');
        $this->load->helper("URL", "DATE", "URI", "FORM");
        $this->load->library('form_validation');
        $this->load->library('upload');
    }


    public function index()
    {
        $this->show_houses();
    }


    public function show_houses()
    {


        //$house_id = $this->uri->segment(3);//get id from the url
        $data['HOUSE_DETAILS'] = $this->profile_model->show_all_houses();        
        $this->load->view('profile',$data);

    }

    function update_house_details() {

    $files = $_FILES;
    $cpt = count($_FILES['userfile']['name']);
    for($i=0; $i<$cpt; $i++){
        $_FILES['userfile']['name']     = $files['userfile']['name'][$i];
        $_FILES['userfile']['type']     = $files['userfile']['type'][$i];
        $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
        $_FILES['userfile']['error']    = $files['userfile']['error'][$i];
        $_FILES['userfile']['size']     = $files['userfile']['size'][$i];    
 
        $this->upload->initialize($this->set_upload_options());
        $final_images = $this->upload->do_upload();
 
        $upload_data    = $this->upload->data();

            $file_name  =   $upload_data['file_name'];
            $file_type  =   $upload_data['file_type'];
            $file_size  =   $upload_data['file_size'];
            $file_path  =   $upload_data['file_path'];


            $myownpath = 'assets/img2/';

            if ( $file_name == "" || $file_name == NULL) {

                $house_id = ($this->input->post('house_id'));
                $full_image_name = $this->profile_model->get_picture_of_selected_house_id($house_id);                           
            }
            else
            { 
                $full_image_name = $myownpath.$file_name;          

            }

        $location= ($this->input->post('house_location'));
        $type= ($this->input->post('house_type'));
        $rfacility= ($this->input->post('rfacility'));
        $road= ($this->input->post('road'));
        $price_range= ($this->input->post('price_range'));
        $house_id= ($this->input->post('house_id'));

        $house_data = array(
            'type' => $type,            
            'location' => $location,
            'rfacility' => $rfacility,
            'road' => $road,
            'price' => $price_range,
            'photo1' => $full_image_name,

        );

        $house_update = $this->profile_model->update_house($house_id,$house_data);
        $this->show_houses();
        redirect(base_url().'index.php/profile');
    }
}


    function delete_house_details($id){
        $this->db->where('house_id', $id);
        $this->db->delete('house_details');

        redirect(base_url().'index.php/profile');
    }
    public function post_new_houses(){
        $location= ($this->input->post('house_location'));
        $type= ($this->input->post('house_type'));
        $rfacility= ($this->input->post('rfacility'));
        $road= ($this->input->post('road'));
        $price_range= ($this->input->post('price_range'));

        $house = array(
            'type' => $type,        	
            'location' => $location,
            'rfacility' => $rfacility,
            'road' => $road,
            'price' => $price_range,

        );

        $houseId = $this->profile_model->add_a_house($house);
        redirect(base_url().'index.php/profile');


} 

function post_new_house(){
 
    $files = $_FILES;
    $cpt = count($_FILES['userfile']['name']);
    for($i=0; $i<$cpt; $i++){
        $_FILES['userfile']['name']     = $files['userfile']['name'][$i];
        $_FILES['userfile']['type']     = $files['userfile']['type'][$i];
        $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
        $_FILES['userfile']['error']    = $files['userfile']['error'][$i];
        $_FILES['userfile']['size']     = $files['userfile']['size'][$i];    
 
        $this->upload->initialize($this->set_upload_options());
        $final_images = $this->upload->do_upload();
 
        $upload_data    = $this->upload->data();

            $file_name  =   $upload_data['file_name'];
            $file_type  =   $upload_data['file_type'];
            $file_size  =   $upload_data['file_size'];
            $file_path  =   $upload_data['file_path'];


            $myownpath = 'assets/img2/';
            $full_image_name = $myownpath.$file_name;

// post the photo name and other form fields to the database
        $location= ($this->input->post('house_location'));
        $type= ($this->input->post('house_type'));
        $rfacility= ($this->input->post('rfacility'));
        $road= ($this->input->post('road'));
        $price_range= ($this->input->post('price_range'));

        $house = array(
            'type' => $type,            
            'location' => $location,
            'rfacility' => $rfacility,
            'road' => $road,
            'price' => $price_range,
            'photo1' => $full_image_name,

        );

        $houseId = $this->profile_model->add_a_house($house);
        redirect(base_url().'index.php/profile');
 
        // Output control
            // $data['getfiledata_file_name'] = $file_name;
            // $data['getfiledata_file_type'] = $file_type;
            // $data['getfiledata_file_size'] = $file_size;
      
        // Insert Data for current file
            // $this->m_upload->insertNotices($form_input_Data); 
        //Create a view containing just the text "Uploaded successfully"
        //$this->load->view('upload_success', $data);
 
    }
 
}

private function set_upload_options(){   
    //  upload an image options
    $config = array();
    $config['upload_path'] = './assets/img2/';
    $config['allowed_types'] = 'gif|jpg|png|pdf';
    $config['max_size']      = '2048000';
    $config['overwrite']     = FALSE;
 
 
    return $config;
}
}