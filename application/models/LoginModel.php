<?php
class LoginModel extends CI_Model{
	function __construct(){
		//parent::__construct();
	}
	public function check(){
		$username = $this->input->post('username');
        $password = $this->input->post('password');
        $rememberMe = $this->input->post('rememberMe');
        //$this->db->select('username','password','user_type');
        $this->db->where('password',sha1($password));
        $this->db->where('username',$username);
        $this->db->from('users');
        $is = $this->db->count_all_results();
        if($is > 0){
            $this->db->where('password',sha1($password));
            $this->db->where('username',$username);
            $user = $this->db->get('users')->result();

            foreach($user as $rows)
                $data_session = array(
                    'id'=>$rows->user_id,
                    'username'=>$rows->username,
                    'name'=>$rows->name,
                    'last_name'=>$rows->last_name,
                    'father_name'=>$rows->father_name,
                    'image'=>$rows->photo,
                    'signature_image'=>$rows->signature_photo,
                    'type'=>$rows->user_type,
                    'root_id'=>$rows->root_id,
                    'access'=>$rows->access,
				    'login'=>true,
                    'lock'=>false
                );
                $this->session->set_userdata($data_session);
                redirect("DashboardController");
        }else{
            $this->load->view('loginView' ,array('error'=>true));
        }
	}
}
?>
