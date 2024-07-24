<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller{
	function __construct(){
		parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
	}

	public function index(){
		$this->load->view('loginView');
	}
	public function auth(){
		$error_user  = $error_pass = $username = $password= '';
        $error = false;
        if(isset($_POST['login'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            // ----------------- user email -----------------------
            if(empty($username)){
                $error_user = "لطفاً نام کاربری خود را وارد کنید!";
                $error = true;
            }
            // ----------------- user pass -------------------------
            if(empty($password)){
                $error_pass = "لطفاً رمز عبور خود را وارد نمایمد!";
                $error = true;
            }

        }
        if(!$error){
            $this->load->model('loginModel');
            $this->loginModel->check();
        }else{
            $Field = array(
                'error_user'=>$error_user,
                'error_pass'=>$error_pass
            );
            $this->load->view('loginView',array('data'=>$_POST,'Error'=>$Field));
        }
	}
}

?>
