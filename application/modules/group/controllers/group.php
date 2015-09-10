<?php
class Group extends MX_Controller 
{

function __construct() {
parent::__construct();
}


public function index()
	{
            $this->load->model('mdl_group');
            $this->load->library('pagination');
            $this->load->library('table');
            $config['base_url'] = base_url().'/depot/index';
            $config['total_rows'] = $this->mdl_group->get('id')->num_rows;
            $config['per_page'] = 5;
            $config['num_links'] = 4;
            $config['full_tag_open'] = '<div><ul class="pagination pagination-small pagination-centered">';
            $config['full_tag_close'] = '</ul></div>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
            $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
            $config['next_tag_open'] = "<li>";
            $config['next_tagl_close'] = "</li>";
            $config['prev_tag_open'] = "<li>";
            $config['prev_tagl_close'] = "</li>";
            $config['first_tag_open'] = "<li>";
            $config['first_tagl_close'] = "</li>";
            $config['last_tag_open'] = "<li>";
            $config['last_tagl_close'] = "</li>";
            
            $this->pagination->initialize($config);
            $data['records'] = $this->db->get('m_group', $config['per_page'], $this->uri->segment(3));
            $data['section'] = "Configuration";
            $data['subtitle'] = "Group";
            $data['page_title'] = "Add group";
            $data['module']="group";
            $data['view_file']="list_group_view";
            echo Modules::run('template/admin', $data);  
	}
   



function create(){
	
            $update_id= $this->uri->segment(3);
            $data = array();
            $this->load->model('mdl_group');
            
            if (!isset($update_id )){
                $update_id = $this->input->post('update_id', $id);
				
            }
            
            if (is_numeric($update_id)){
                $data = $this->get_data_from_db($update_id);
                $data['update_id'] = $update_id;
								
                
            } else {
				$data= $this->get_data_from_post();
						
            }
            
    $data['section'] = "Configuration";
    $data['subtitle'] = "Group";
    $data['page_title'] = "Add group";
	$data['module'] = "group";
	$data['view_file'] = "create_group_form";
	echo Modules::run('template/admin', $data);
}

function get_data_from_post(){
            $data['name']=$this->input->post('name', TRUE);
			$data['role']=$this->input->post('role', TRUE);
			        
            return $data;
        }

        function get_data_from_db($update_id){
               $query = $this->get_where($update_id);
               foreach ($query->result() as $row){
                   $data['name'] = $row->name;
                   $data['role'] = $row->role;
                  
               }
            return $data;
        }

          function submit (){
            
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Group Name', 'required|xss_clean');
        $this->form_validation->set_rules('role', 'Group Description', 'required|xss_clean');
       
       
        $update_id = $this->input->post('update_id', TRUE);
        if ($this->form_validation->run() == FALSE)
        {   
                    $this->create();         
        }
        else
        {       
                   $data =  $this->get_data_from_post();
                   
                   if(is_numeric($update_id)){
                       $this->_update($update_id, $data);
                       $this->session->set_flashdata('msg', '<div id="alert-message" class="alert alert-success text-center">depot details updated successfully!</div>');
            
                   } else {
                       $this->_insert($data);
                       $this->session->set_flashdata('msg', '<div id="alert-message" class="alert alert-success text-center">New depot added successfully!</div>');
                   }
                   
                   //$this->session->set_flashdata('success', 'depot added successfully.');
                   redirect('group');
        }
        }

        function delete($id){
$this->_delete($id);
$this->session->set_flashdata('msg', '<div id="alert-message" class="alert alert-success text-center">depot details deleted successfully!</div>');
redirect('depot');
}


function get($order_by){
$this->load->model('mdl_group');
$query = $this->mdl_group->get($order_by);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$this->load->model('mdl_group');
$query = $this->mdl_group->get_with_limit($limit, $offset, $order_by);
return $query;
}

function get_where($id){
$this->load->model('mdl_group');
$query = $this->mdl_group->get_where($id);
return $query;
}

function get_where_custom($col, $value) {
$this->load->model('mdl_group');
$query = $this->mdl_group->get_where_custom($col, $value);
return $query;
}

function _insert($data){
$this->load->model('mdl_group');
$this->mdl_group->_insert($data);
}

function _update($id, $data){
$this->load->model('mdl_group');
$this->mdl_group->_update($id, $data);
}

function _delete($id){
$this->load->model('mdl_group');
$this->mdl_group->_delete($id);
}

function count_where($column, $value) {
$this->load->model('mdl_group');
$count = $this->mdl_group->count_where($column, $value);
return $count;
}

function get_max() {
$this->load->model('mdl_group');
$max_id = $this->mdl_group->get_max();
return $max_id;
}

function _custom_query($mysql_query) {
$this->load->model('mdl_group');
$query = $this->mdl_group->_custom_query($mysql_query);
return $query;
}

}