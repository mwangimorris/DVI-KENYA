<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Refrigerator extends MX_Controller {

function __construct() {
parent::__construct();
}
	public function index()
	{
		$this->load->model('mdl_refrigerator');
		$this->load->library('pagination');
		$this->load->library('table');
		$config['base_url'] = base_url().'/refrigerator/index';
		$config['total_rows'] = $this->mdl_refrigerator->get('id')->num_rows;
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
		$data['records'] = $this->db->get('m_refrigerator', $config['per_page'], $this->uri->segment(3));
		$data['section'] = "Configuration";
        $data['subtitle'] = "refrigerator";
        $data['page_title'] = "List refrigerators";
		$data['module']="refrigerator";
		$data['view_file']="list_refrigerator_view";
		echo Modules::run('template/admin', $data);			
	}
	
	

		function create(){
	
            $update_id= $this->uri->segment(3);
            $data = array();
            $this->load->model('mdl_refrigerator');
            
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
        $data['subtitle'] = "refrigerators";
        $data['page_title'] = "Add refrigerators";
		$data['module'] = "refrigerator";
		$data['view_file'] = "create_refrigerator_form";
		echo Modules::run('template/admin', $data);
	}

	function delete($id){
		$this->load->model('mdl_refrigerator');
		$this->mdl_refrigerator->_delete($id);
		$this->session->set_flashdata('msg', '<div id="alert-message" class="alert alert-success text-center">refrigerator deleted successfully!</div>');
		redirect('refrigerator/','refresh');
	}		
	function get_data_from_db($update_id){
		$query = $this->get_where($update_id);
		foreach ($query->result() as $row){
		  $data['make_model'] = $row->make_model;
		  $data['temp_monitor_no'] = $row->temp_monitor_no;
		  $data['main_power_source'] =  $row->main_power_source;
		  $data['backup_power_source'] =  $row->backup_power_source;
		  $data['refrigerator_age'] =  $row->refrigerator_age;
		  }
		  return $data;
	  }
	function get_data_from_post(){
		
		$data['make_model'] 			= $this->input->post('make_model', TRUE);
		$data['temp_monitor_no'] 		= $this->input->post('temp_monitor_no', TRUE);
		$data['main_power_source'] 		= $this->input->post('main_power_source', TRUE);
		$data['backup_power_source'] 	= $this->input->post('backup_power_source', TRUE);
		$data['refrigerator_age'] 		= $this->input->post('refrigerator_age', TRUE);
		return $data;
	}
	function submit (){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('make_model','Make & Model','trim|required');
		$this->form_validation->set_rules('temp_monitor_no','Temperature Monitoring Device No','trim|required');
		$this->form_validation->set_rules('main_power_source','Main Power Source','trim|required');
		$this->form_validation->set_rules('backup_power_source','Backup Power Source','trim|required');
		$this->form_validation->set_rules('refrigerator_age','Age of Refrigerator','trim|required');
				
		$update_id = $this->input->post('update_id', TRUE);
		echo $update_id;
		if ($this->form_validation->run() == FALSE)
		{	
			$this->create();         
		}
		else
		{		
                   $data =  $this->get_data_from_post();
                   
                   if(is_numeric($update_id)){
                       $this->_update($update_id, $data);
                       $this->session->set_flashdata('msg', '<div id="alert-message" class="alert alert-success text-center">refrigerator details updated successfully!</div>');
            
                   } else {
                       $this->_insert($data);
                       $this->session->set_flashdata('msg', '<div id="alert-message" class="alert alert-success text-center">New refrigerator added successfully!</div>');
                   }
                   
                   $this->session->set_flashdata('success', 'Refrigerator added successfully.');
                   redirect('refrigerator/');
		}
	}
	
	
function get($order_by){
$this->load->model('mdl_refrigerator');
$query = $this->mdl_refrigerator->get($order_by);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$this->load->model('mdl_refrigerator');
$query = $this->mdl_refrigerator->get_with_limit($limit, $offset, $order_by);
return $query;
}

function get_where($id){
$this->load->model('mdl_refrigerator');
$query = $this->mdl_refrigerator->get_where($id);
return $query;
}

function get_where_custom($col, $value) {
$this->load->model('mdl_refrigerator');
$query = $this->mdl_refrigerator->get_where_custom($col, $value);
return $query;
}

function _insert($data){
$this->load->model('mdl_refrigerator');
$this->mdl_refrigerator->_insert($data);
}

function _update($id, $data){
$this->load->model('mdl_refrigerator');
$this->mdl_refrigerator->_update($id, $data);
}

function _delete($id){
$this->load->model('mdl_refrigerator');
$this->mdl_refrigerator->_delete($id);
}

function count_where($column, $value) {
$this->load->model('mdl_refrigerator');
$count = $this->mdl_refrigerator->count_where($column, $value);
return $count;
}

function get_max() {
$this->load->model('mdl_refrigerator');
$max_id = $this->mdl_refrigerator->get_max();
return $max_id;
}

function _custom_query($mysql_query) {
$this->load->model('mdl_refrigerator');
$query = $this->mdl_refrigerator->_custom_query($mysql_query);
return $query;
}

		
}

/* End of file refrigerator.php */
/* Location: ./modules/refrigerator/controllers/refrigerator.php */