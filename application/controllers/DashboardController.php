<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class DashboardController extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
        $this->load->helper('url');
        $this->load->library('grocery_CRUD');
        $this->load->model('dashboardModel');

	}
	function index(){
	       
        $dateUpdate = $this->dashboardModel->dateUpdate();
		$this->load->view('include/header.inc.php');
		$this->load->view('DashboardView',array('dateUpdate' => $dateUpdate));
		$this->load->view('include/footer.inc.php');
	}
	function insert()
    {   
        $stop_date = date('Y-m-d');
        $dateUpdate = $this->dashboardModel->dateUpdate();
        if ($dateUpdate!=date('Y-m-d')) {
            $url = "http://www.cbr.ru/scripts/XML_daily.asp";
            $xml = simplexml_load_file($url);
            $array = (array)$xml;
            foreach ($xml->children() as $row) {
                $data=array(
                    'num_сode'=> $row->NumCode,
                    'char_сode' => $row->CharCode,
                    'unit'=> $row->Nominal,
                    'currency' => $row->Name,
                    'rate' => $row->Value,
                    'date' => date('Y-m-d', strtotime($stop_date . ' -2 day')),
                    'create_at' => date('Y-m-d')
                );
                $this->dashboardModel->setCurrency($data);
            }
            redirect('DashboardController/index?set=ture');    
        }else{
            redirect('DashboardController/index?notSet=ture');
        }
        
	}

	function listItems()
    {
        $data = array();
        $this->dashboardModel->DatatableRetrieveItems();
    }
}

?>
