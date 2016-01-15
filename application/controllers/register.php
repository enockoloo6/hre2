<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('register');
	}


    /**
     * encript the password
     * @return mixed
     */
    function __encrip_password($password) {
        return md5($password);
    }
    /**
     * check the username and the password with the database
     * @return void
     */
    function validate()
    {
        $this->load->model('user_model');
        $user_name = $this->input->post('user_name');
        $password = $this->__encrip_password($this->input->post('password'));
        $is_valid = $this->user_model->validate($user_name, $password);

        if($is_valid)
        {
            $role=$is_valid[0]['role'];
            $user_id=$is_valid[0]['user_id'];
            $f_name=$is_valid[0]['name'];
            $other_names=$is_valid[0]['name'];
            //print_r($is_valid);
            $data = array(
                'user_name' => $user_name,
                'user_id' => $user_id,
                'is_logged_in' => true,
                'role' => $role,
                'f_name'=>$f_name,
                'other_names'=>$other_names
            );
            $this->session->set_userdata($data);
            if($role==0)
            {
                redirect('index.php/housesearch');
            }
            elseif($role==1)
            {
                redirect('index.php/profile');
            }
            elseif($role==-1)
            {
                redirect('index.php/home');
            }
            else
            {
                show_404();
            }
            //redirect('admin/products');
        }
        else // incorrect username or password
        {
            $data['message_error'] = TRUE;
            $this->load->view('login', $data);
        }
    }
    public function create_user()
    {
        $f_name=$this->input->post('f_name');
        $other_names=$this->input->post('other_names');
        $phone_number=$this->input->post('phone_number');
        $national_id=$this->input->post('national_id');
        $password=$this->input->post('password');
        $email=$this->input->post('email');
        $role=$this->input->post('role');
        $this->load->model('user_model');

        if($this->user_model->new_user($f_name,$other_names,$phone_number,$national_id,$password,$email,$role))
        {
            $data['flash_message']=TRUE;
            //$this->load->view('register', $data);
            redirect(base_url()."index.php/users");
        }
    }
    public function edit_user()
    {

        $f_name=$this->input->post('f_name');
        $other_names=$this->input->post('other_names');
        $phone_number=$this->input->post('phone_number');
        $national_id=$this->input->post('national_id');
        $password=$this->input->post('password');
        $user_id=$this->input->post('user_id');
        if(empty($password))
        {
            $password=1111;
        }
        $email=$this->input->post('email');
        $this->load->model('user_model');
        if($this->user_model->edit_user($f_name,$other_names,$phone_number,$national_id,$password,$email,$user_id))
        {
            $data['flash_message']=TRUE;
            //$this->load->view('register', $data);
            redirect(base_url()."index.php/users");
        }
    }


function post_profile_photo(){
 
    $files = $_FILES;
    $cpt = count($_FILES['userphoto']['name']);
    for($i=0; $i<$cpt; $i++){
        $_FILES['userphoto']['name']     = $files['userphoto']['name'][$i];
        $_FILES['userphoto']['type']     = $files['userphoto']['type'][$i];
        $_FILES['userphoto']['tmp_name'] = $files['userphoto']['tmp_name'][$i];
        $_FILES['userphoto']['error']    = $files['userphoto']['error'][$i];
        $_FILES['userphoto']['size']     = $files['userphoto']['size'][$i]; 

        $this->load->helper("URL", "DATE", "URI", "FORM");
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->load->model('user_model');


        $this->upload->initialize($this->set_upload_options());
        $final_images = $this->upload->do_upload();

        $upload_data    = $this->upload->data();
            $file_name  =   $upload_data['file_name'];

            $myownpath = 'assets/img2/';
            $full_image_name = $myownpath.$file_name;
            $uid=$this->input->post('user_id');

// post the photo name and other form fields to the database
        $ppicture = array(

            'photo' => $full_image_name,
        );

        $photo = $this->user_model->add_a_photo_to_profile($uid,$ppicture);
        redirect(base_url().'index.php/profile'); 
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

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */