<?php

class dashboardModel extends CI_Model
{
	
	function __construct()
	{
	//	parent::__construct();
	}	
	function dateUpdate()
	{
	 	$last_row=$this->db->select('date')->order_by('currency_id',"desc")->limit(1)->get('currency')->row();
        if ($last_row==null) {
            return '0000-00-00';    
        }else{
		    return $last_row->date;
        }
	}
	function setCurrency($data)
	{
	 	$this->db->insert('currency',$data);
		return $this->db->insert_id();
	}
    function retrieveCurrencyByDate($num_сode,$date){
        $this->db->where('date',$date);
        $this->db->where('num_сode',$num_сode);
        $this->db->from('currency');
        return $this->db->get()->result();
    }
	function DatatableRetrieveItems()
	{	
		    /** this will handle datatable js ajax call * */
            /** get all datatable parameters * */
            $search = $this->input->get('search');/** search value for datatable  * */
            $offset = intval($this->input->get("start"));/** offset value * */
            $limit = intval($this->input->get('length'));
            /** limits for datatable (show entries) * */
            $order = $this->input->get('order');/** order by (column sorted ) * */
            $column = array('currency_id','num_сode', 'char_сode');/**  set your data base column name here for sorting* */
            $orderColumn = isset($order[0]['column']) ? $column[$order[0]['column']] : 'currency_id';
            $orderDirection = isset($order[0]['dir']) ? $order[0]['dir'] : 'asc';
            $ordrBy = $orderColumn . " " . $orderDirection;

            if (isset($search['value']) && !empty($search['value'])) {
                /** creat sql or call Model * */
                /**   $this->load->model('Parameter_model');
                  $this->Parameter_model->get_parameter('tbl_parameter'); * */
                /** I am calling sql directly in controller for your answer 
                 * Please change your sql according to your table name
                 * */
                $sql = "SELECT * FROM currency WHERE currency.date = '".date('Y-m-d')."' currency like '%" . $search['value'] ."%' order by " . $ordrBy . " limit $offset,$limit";
                $sql2 = "SELECT count(*) FROM currency WHERE currency.date = '".date('Y-m-d')."' currency like '%" . $search['value'] ."%' order by " . $ordrBy;
                $result = $this->db->query($sql);
                $result2 = $this->db->query($sql2);
                $count = $result2->num_rows();
            } else {
                /**
                 * If no seach value avaible in datatable
                 */
                $sql = "SELECT * FROM currency WHERE currency.date= '".date('Y-m-d')."' order by " . $ordrBy ." limit $offset,$limit";
                $sql2 = "SELECT * FROM currency WHERE currency.date='".date('Y-m-d')."' order by " . $ordrBy ;
                $result = $this->db->query($sql);
                $result2 = $this->db->query($sql2);
                $count = $result2->num_rows();
            }
            /** create data to display in dataTable as you want **/    

            $data = array();
            if (!empty($result->result())) {
                
                foreach($result->result() as $r) {
		        $comper = $this->retrieveCurrencyByDate($r->num_сode,date('Y-m-d', strtotime( date('Y-m-d') . ' -1 day')));
                $currency = "";
                foreach ($comper as $key ) {
                    
                    if ($key->rate > $r->rate ) {
                            $currency.= "<span style='color:green;font-weight:bolder'>".$r->currency."</span>";   
                        }elseif ($key->rate < $r->rate) {
                           $currency.= "<span style='color:red;font-weight:bolder'>".$r->currency."</span>"; 
                        }else{
                            $currency.= "<span style='font-weight:bolder'>".$r->currency."</span>";
                        }
                 }
                   $data[] = array(
                        $r->num_сode,
                        $r->char_сode,
                        $r->unit,
                        $currency,
                        $r->rate
                   ); 
               
                   
		      }
            }
            
            $results = array(
                "draw" => $this->input->get('draw'),
                "recordsTotal" => count($data),
                "recordsFiltered" => $count,
                "data" => $data 
            );
            echo json_encode($results);
        
	}
}
?>