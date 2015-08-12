<?php
/**
* 
*/
class Stock extends MX_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
    
    function receive_stock(){
    	 $data['module'] = "stock";
    	 $data['view_file'] = "receive_stock";
         echo Modules::run('template/admin', $data);
    }
    function save_stock(){}
	
}