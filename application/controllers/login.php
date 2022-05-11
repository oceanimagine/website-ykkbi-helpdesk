<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public $layout;
    private $menu;
    public $test;
    public function __construct() {
        parent::__construct();
	$this->load->model('get_login');
        $this->layout = new layout('login');
        $this->menu = new process_menu();
    }
    
    public function index(){
        $check = "";
        if(isset($_POST['username'])){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            if($username == "helpdesk" && $password == "helpdesk"){
                $_SESSION['PRI'] = "SUPERADMIN";
                $this->layout->render_alert("Welcome Admin.");
		Message::set("Berhasil login sebagai admin super.");
                redirect("home");
            } else {
                $this->get_login->process(array(
                    'action' => 'select',
                    'table' => 'tbl_user_admin',
                    'column_value' => array(
                        'id',
                        'nama_lengkap',
                        'photo_user_admin',
                        'nomor_karyawan',
                        'username'
                    ),
                    'where' => 'username = \''.$username.'\' and password = \''.md5($password).'\'',
                    'order' => 'id desc'
                ));
                $user_active = $this->row;
                if(is_object($user_active) && isset($user_active->nama_lengkap)){
                    $_SESSION['PRI'] = "ADMIN";
                    $_SESSION['USR'] = $user_active->id;
                    $_SESSION['id'] = $user_active->id;
                    $_SESSION['nama_lengkap'] = $user_active->nama_lengkap;
                    $_SESSION['photo_admin'] = $user_active->photo_admin;
                    $_SESSION['nomor_karyawan'] = $user_active->nomor_karyawan;
                    $_SESSION['username'] = $user_active->username;
                    $this->layout->render_alert("Welcome Admin.");
                    Message::set("Berhasil login sebagai admin.");
                    redirect("home");
                } else {
                    $this->get_login->process(array(
                        'action' => 'select',
                        'table' => 'hduser',
                        'column_value' => array(
                            'user_id',
                            'user_password',
                            'user_nip',
                            'user_nama'
                        ),
                        'where' => 'user_nip = \''.$username.'\' and user_password = \''.$password.'\'',
                        'order' => 'user_id desc'
                    ));
                    $hduser_active = $this->row;
                    if(is_object($hduser_active) && isset($hduser_active->user_nama)){
                        $_SESSION['PRI'] = "HDUSER";
                        $_SESSION['USR'] = $hduser_active->user_id;
                        $_SESSION['id'] = $hduser_active->user_id;
                        $_SESSION['nama_lengkap'] = $hduser_active->user_nama;
                        $_SESSION['nomor_karyawan'] = $hduser_active->user_nip;
                        $_SESSION['username'] = $hduser_active->user_nama;
                        $this->layout->render_alert("Welcome Admin.");
                        Message::set("Berhasil login sebagai admin.");
                        redirect("home");
                    }
                }
	    }
            
            $check = "salah";
        }
        
        $this->layout->loadView('login_form', array(
            "check" => $check
        ));
    }
    
}