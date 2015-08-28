<?php
class Users extends MX_Controller 
{
function __construct() {
parent::__construct();
$this->load->model('mdl_users');
}

function index(){
    $this->login();
}

function logout(){
    redirect(base_url());
}

function _logged_in_ok($username){

    $query = $this->get_where_custom('username', $username);
    foreach ($query->result() as $row) {
        $user_id = $row->id;
        $user_fname = $row->f_name;
        $user_lname = $row->l_name;
        $user_email = $row->email;
        $user_group= $row->user_group;
    }

   /*$userdata = array(
                    'email' =>$userdetails->email_address,
                    'f_name'=>$userdetails->f_name,
                    'l_name'=>$userdetails->l_name,
                    'is_logged_in' => TRUE
                    );*/

   $this->session->set_userdata('user_id', $user_id);
//echo "hello".$user_id.$user_email.$user_fname.$user_lname.$user_group;
redirect('county');
}



function create_user(){
	
	$data= $this->get_register_data_from_post();
	$data['module']="users";
    $data['view_file']="register_form";
    echo Modules::run('template/home', $data); 
}

function get_register_data_from_post(){
            $data['f_name']=$this->input->post('f_name', TRUE);
            $data['l_name']=$this->input->post('l_name', TRUE);
            $data['username']=$this->input->post('username', TRUE);
            $data['phone']=$this->input->post('phone', TRUE);
            $data['email']=$this->input->post('email', TRUE);
            $data['title']=$this->input->post('title', TRUE);
            $data['user_group']=$this->input->post('user_group', TRUE);
            //$data['password']=$this->input->post('password', TRUE);
            //$data['passwordc']=$this->input->post('passwordc', TRUE);
           return $data;
        }


 function register(){

        $this->load->library('form_validation');
        $this->form_validation->set_rules('f_name', 'First Name', 'required|xss_clean');
        $this->form_validation->set_rules('l_name', 'Last Name', 'required|xss_clean');
        $this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
        $this->form_validation->set_rules('phone', 'Phone', 'required|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|xss_clean');
        $this->form_validation->set_rules('title', 'Title', 'required|xss_clean');
        $this->form_validation->set_rules('user_group', 'User Group', 'required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|xss_clean|matches[passwordc]');
        $this->form_validation->set_rules('passwordc', 'Password Confirm', 'required|xss_clean');
                
        if ($this->form_validation->run() == FALSE)
        {   
                    $this->create_user();         
        }
        else
        {       
                   $data= $this->get_register_data_from_post();
                    $password = $this->input->post('password', TRUE);
                    $data['password'] = Modules::run('secure_tings/hash_it', $password);

                    //$data['password']=md5($this->input->post('password', TRUE));
            		//$data['passwordc']=$this->input->post('passwordc', TRUE);
                   $this->_insert($data);
                       $this->session->set_flashdata('msg', '<div id="alert-message" class="alert alert-success text-center">You have Successfully Registered to DVI System Kenya. Login to get Started</div>');
                   //$this->session->set_flashdata('success', 'County added successfully.');
                   redirect('users');
        
        }
    }

function login(){
	//$data= $this->get_login_data_from_post();

	$data['module']="users";
    $data['view_file']="login_form";
    echo Modules::run('template/home', $data); 
}
    
function submit() {


     $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|xss_clean|callback_password_check');
        

        if ($this->form_validation->run($this) == FALSE)
        {
            $this->login();
        }
        else
        {
            $username = $this->input->post('username', TRUE);
            $this->_logged_in_ok($username);
        }
    }

function password_check($password) {
    $username = $this->input->post('username', TRUE);
    $password = Modules::run('secure_tings/hash_it', $password);
    $this->load->model('mdl_users');
    $result = $this->mdl_users->password_check($username, $password);

        if ($result== FALSE)
        {
            $this->form_validation->set_message('password_check', 'Incorrect username or password, Try again');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

public function user_login()
 		{
 			$userdetails = $this->mdl_users->user_login();
 			if ($userdetails) {
 				$userdata = array(
 					'email' =>$userdetails->email,
 					'f_name'=>$userdetails->f_name,
 					'l_name'=>$userdetails->l_name,
 					'is_logged_in' => TRUE
 					);

 				$this->session->set_userdata($userdata);

 				redirect('county');
 			}
 			else{
 				$error = $this->session->set_flashdata('msg', '<div id="alert-message" class="alert alert-success text-center">Wrong username or password, Try again</div>');
 				redirect('users');	
 			}

		}





function get($order_by){
$this->load->model('mdl_users');
$query = $this->mdl_users->get($order_by);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$this->load->model('mdl_users');
$query = $this->mdl_users->get_with_limit($limit, $offset, $order_by);
return $query;
}

function get_where($id){
$this->load->model('mdl_users');
$query = $this->mdl_users->get_where($id);
return $query;
}

function get_where_custom($col, $value) {
$this->load->model('mdl_users');
$query = $this->mdl_users->get_where_custom($col, $value);
return $query;
}

function _insert($data){
$this->load->model('mdl_users');
$this->mdl_users->_insert($data);
}

function _update($id, $data){
$this->load->model('mdl_users');
$this->mdl_users->_update($id, $data);
}

function _delete($id){
$this->load->model('mdl_users');
$this->mdl_users->_delete($id);
}

function count_where($column, $value) {
$this->load->model('mdl_users');
$count = $this->mdl_users->count_where($column, $value);
return $count;
}

function get_max() {
$this->load->model('mdl_users');
$max_id = $this->mdl_users->get_max();
return $max_id;
}

function _custom_query($mysql_query) {
$this->load->model('mdl_users');
$query = $this->mdl_users->_custom_query($mysql_query);
return $query;
}

}