<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class ErrorController extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$_SESSION['selectMenu'] = 0;
		$this->load->view('include/header.inc.php');
		$this->load->view('Error404');
		$this->load->view('include/footer.inc.php');
	}

}

?>
