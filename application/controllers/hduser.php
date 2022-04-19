<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* https://stackoverflow.com/jobs/149384/software-engineer-team-lead-iprice-group?med=clc
 * https://stackoverflow.com/questions/17059987/changing-from-msql-to-mysqli-real-escape-string-link
 */

class hduser extends CI_Controller {
    
    public $layout;
    
    public function __construct() {
        parent::__construct();
        $this->load->model('get_hduser');
        $this->layout = new layout('lite');
        Privilege::admin();
    }

    public function get_hduser() {
        $this->get_hduser->get_data();
    }

    public function script_table(){
        return $this->layout->loadjs("hduser/get_hduser");
    }
    
    public function hapus($id){
        $_GET['id'] = $id;
        
        $this->get_hduser->process(array(
            'action' => 'delete',
            'table' => 'hduser',
            'where' => 'user_id = \''.$id.'\''
        ));
        redirect('hduser');
    }
    
    public function edit($id){
        if($this->input->post('user_id')){
            $_GET['id'] = $id;
            
            $user_id = $this->input->post('user_id');
            $user_password = $this->input->post('user_password');
            $user_nip = $this->input->post('user_nip');
            $user_nama = $this->input->post('user_nama');
            $user_satker = $this->input->post('user_satker');
            $user_email = $this->input->post('user_email');
            $user_level = $this->input->post('user_level');
            $inputnama = $this->input->post('inputnama');
            $inputtgl = $this->input->post('inputtgl');
            $inputjam = $this->input->post('inputjam');
            $this->get_hduser->process(array(
                'action' => 'update',
                'table' => 'hduser',
                'column_value' => array(
                    
                    'user_id' => $user_id,
                    'user_password' => $user_password,
                    'user_nip' => $user_nip,
                    'user_nama' => $user_nama,
                    'user_satker' => $user_satker,
                    'user_email' => $user_email,
                    'user_level' => $user_level,
                    'inputnama' => $inputnama,
                    'inputtgl' => $inputtgl,
                    'inputjam' => $inputjam
                ),
                'where' => 'user_id = \''.$id.'\''
            ));
            redirect('hduser/edit/'.$id.'');
        }
        $this->get_hduser->process(array(
            'action' => 'select',
            'table' => 'hduser',
            'column_value' => array(
                
                'user_id',
                'user_password',
                'user_nip',
                'user_nama',
                'user_satker',
                'user_email',
                'user_level',
                'inputnama',
                'inputtgl',
                'inputjam'
            ),
            'where' => 'user_id = \''.$id.'\''
        ));
        $this->layout->loadView('hduser_form', array(
            
            'user_id' => $this->row->{'user_id'},
            'user_password' => $this->row->{'user_password'},
            'user_nip' => $this->row->{'user_nip'},
            'user_nama' => $this->row->{'user_nama'},
            'user_satker' => $this->row->{'user_satker'},
            'user_email' => $this->row->{'user_email'},
            'user_level' => $this->row->{'user_level'},
            'inputnama' => $this->row->{'inputnama'},
            'inputtgl' => $this->row->{'inputtgl'},
            'inputjam' => $this->row->{'inputjam'}
        ));
    }
    
    public function add(){
        if($this->input->post('user_id')){
            
            $user_id = $this->input->post('user_id');
            $user_password = $this->input->post('user_password');
            $user_nip = $this->input->post('user_nip');
            $user_nama = $this->input->post('user_nama');
            $user_satker = $this->input->post('user_satker');
            $user_email = $this->input->post('user_email');
            $user_level = $this->input->post('user_level');
            $inputnama = $this->input->post('inputnama');
            $inputtgl = $this->input->post('inputtgl');
            $inputjam = $this->input->post('inputjam');
            $this->get_hduser->process(array(
                'action' => 'insert',
                'table' => 'hduser',
                'column_value' => array(
                    
                    'user_id' => $user_id,
                    'user_password' => $user_password,
                    'user_nip' => $user_nip,
                    'user_nama' => $user_nama,
                    'user_satker' => $user_satker,
                    'user_email' => $user_email,
                    'user_level' => $user_level,
                    'inputnama' => $inputnama,
                    'inputtgl' => $inputtgl,
                    'inputjam' => $inputjam
                )
            ));
            redirect('hduser/add');
        }
        $this->layout->loadView('hduser_form');
    }
    
    public function index() {
        $this->layout->loadView(
            'hduser_list',
            array(
                "hasil" => "abcd",
                "script" => $this->script_table()
            )
        );
    }
    
    public function inbox(){
        $this->layout->loadView('inbox_view');
    }
}