<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('get_home');
        $this->layout = new layout('lite');
        Privilege::admin();
    }
    public function get_jumlah($prioritas, $status){
        $this->get_home->process(array(
            'action' => 'select',
            'table' => 'hdcasedaftar',
            'column_value' => array(
                'notiket'
            ),
            'where' => 'prioritas = \''.$prioritas.'\' and kejadian_status = \''.$status.'\''
        ));
        return $this->num;
    }
    public function index(){
        $this->layout->loadView(array(
            "set_custom_view" => $this
        ), array(
            "controller" => $this
        ));
    }
}