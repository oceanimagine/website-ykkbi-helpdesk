<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* https://stackoverflow.com/jobs/149384/software-engineer-team-lead-iprice-group?med=clc
 * https://stackoverflow.com/questions/17059987/changing-from-msql-to-mysqli-real-escape-string-link
 */

class hdsatker extends CI_Controller {
    
    public $layout;
    
    public function __construct() {
        parent::__construct();
        $this->load->model('get_hdsatker');
        $this->layout = new layout('lite');
        Privilege::admin();
    }

    public function get_hdsatker() {
        $this->get_hdsatker->get_data();
    }

    public function script_table(){
        return $this->layout->loadjs("hdsatker/get_hdsatker");
    }
    
    public function hapus($id){
        $_GET['id'] = $id;
        
        $this->get_hdsatker->process(array(
            'action' => 'delete',
            'table' => 'hdsatker',
            'where' => 'satker_kode = \''.$id.'\''
        ));
        redirect('hdsatker');
    }
    
    public function edit($id){
        if($this->input->post('satker_nama')){
            $_GET['id'] = $id;
            $satker_nama = $this->input->post('satker_nama');
            $this->get_hdsatker->process(array(
                'action' => 'update',
                'table' => 'hdsatker',
                'column_value' => array(
                    'satker_nama' => $satker_nama
                ),
                'where' => 'satker_kode = \''.$id.'\''
            ));
            redirect('hdsatker/edit/'.$id.'');
        }
        $this->get_hdsatker->process(array(
            'action' => 'select',
            'table' => 'hdsatker',
            'column_value' => array(
                
                'satker_kode',
                'satker_nama'
            ),
            'where' => 'satker_kode = \''.$id.'\''
        ));
        $this->layout->loadView('hdsatker_form', array(
            
            'satker_kode' => $this->row->{'satker_kode'},
            'satker_nama' => $this->row->{'satker_nama'}
        ));
    }
    
    public function add(){
        if($this->input->post('satker_kode')){
            
            $satker_kode = strtoupper($this->input->post('satker_kode'));
            $satker_nama = $this->input->post('satker_nama');
            
            $this->get_hdsatker->process(array(
                'action' => 'select',
                'table' => 'hdsatker',
                'column_value' => array(
                    'satker_kode'
                ),
                'where' => 'satker_kode = \''.$satker_kode.'\''
            ));
            $data_single = $this->all;
            if(sizeof($data_single) == 0){
                $this->get_hdsatker->process(array(
                    'action' => 'insert',
                    'table' => 'hdsatker',
                    'column_value' => array(

                        'satker_kode' => $satker_kode,
                        'satker_nama' => $satker_nama
                    )
                ));
            } else {
                Message::set("Satker Kode Sudah Tersedia.");
            }
            redirect('hdsatker/add');
        }
        $this->layout->loadView('hdsatker_form');
    }
    
    public function index() {
        $this->layout->loadView(
            'hdsatker_list',
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