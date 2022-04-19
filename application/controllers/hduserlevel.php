<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* https://stackoverflow.com/jobs/149384/software-engineer-team-lead-iprice-group?med=clc
 * https://stackoverflow.com/questions/17059987/changing-from-msql-to-mysqli-real-escape-string-link
 */

class hduserlevel extends CI_Controller {
    
    public $layout;
    
    public function __construct() {
        parent::__construct();
        $this->load->model('get_hduserlevel');
        $this->layout = new layout('lite');
        Privilege::admin();
    }

    public function get_hduserlevel() {
        $this->get_hduserlevel->get_data();
    }

    public function script_table(){
        return $this->layout->loadjs("hduserlevel/get_hduserlevel");
    }
    
    public function hapus($id){
        $_GET['id'] = $id;
        
        $this->get_hduserlevel->process(array(
            'action' => 'delete',
            'table' => 'hduserlevel',
            'where' => 'kode_level = \''.$id.'\''
        ));
        redirect('hduserlevel');
    }
    
    public function edit($id){
        if($this->input->post('kode_level')){
            $_GET['id'] = $id;
            
            $kode_level = $this->input->post('kode_level');
            $nama_level = $this->input->post('nama_level');
            $this->get_hduserlevel->process(array(
                'action' => 'update',
                'table' => 'hduserlevel',
                'column_value' => array(
                    
                    'kode_level' => $kode_level,
                    'nama_level' => $nama_level
                ),
                'where' => 'kode_level = \''.$id.'\''
            ));
            redirect('hduserlevel/edit/'.$id.'');
        }
        $this->get_hduserlevel->process(array(
            'action' => 'select',
            'table' => 'hduserlevel',
            'column_value' => array(
                
                'kode_level',
                'nama_level'
            ),
            'where' => 'kode_level = \''.$id.'\''
        ));
        $this->layout->loadView('hduserlevel_form', array(
            
            'kode_level' => $this->row->{'kode_level'},
            'nama_level' => $this->row->{'nama_level'}
        ));
    }
    
    public function add(){
        if($this->input->post('kode_level')){
            
            $kode_level = $this->input->post('kode_level');
            $nama_level = $this->input->post('nama_level');
            $this->get_hduserlevel->process(array(
                'action' => 'insert',
                'table' => 'hduserlevel',
                'column_value' => array(
                    
                    'kode_level' => $kode_level,
                    'nama_level' => $nama_level
                )
            ));
            redirect('hduserlevel/add');
        }
        $this->layout->loadView('hduserlevel_form');
    }
    
    public function index() {
        $this->layout->loadView(
            'hduserlevel_list',
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