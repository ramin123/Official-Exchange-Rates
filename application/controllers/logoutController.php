<?php
class LogoutController extends MY_Controller{
	function index(){
        unset($_SESSION['login']);

        unset($_SESSION['id']);
        if(isset($_COOKIE[session_name()])){
            setcookie(session_name(),null, time() - 3600);
        }
        $this->session->sess_destroy();
        redirect('loginController/index');
	}
}
?>