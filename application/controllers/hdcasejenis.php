<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* https://stackoverflow.com/jobs/149384/software-engineer-team-lead-iprice-group?med=clc
 * https://stackoverflow.com/questions/17059987/changing-from-msql-to-mysqli-real-escape-string-link
 */

class hdcasejenis extends CI_Controller {
    
    public $layout;
    
    public function __construct() {
        parent::__construct();
        $this->load->model('get_hdcasejenis');
        $this->layout = new layout('lite');
        Privilege::admin();
    }

    public function get_hdcasejenis() {
        $this->get_hdcasejenis->get_data();
    }

    public function script_table(){
        return $this->layout->loadjs("hdcasejenis/get_hdcasejenis");
    }
    
    public function hapus($id){
        $_GET['id'] = $id;
        
        $this->get_hdcasejenis->process(array(
            'action' => 'delete',
            'table' => 'hdcasejenis',
            'where' => 'kejadian_jenis = \''.$id.'\''
        ));
        redirect('hdcasejenis');
    }
    
    public function edit($id){
        if($this->input->post('kejadian_jenis')){
            $_GET['id'] = $id;
            
            $kejadian_jenis = $this->input->post('kejadian_jenis');
            $kejadian_keterangan = $this->input->post('kejadian_keterangan');
            $this->get_hdcasejenis->process(array(
                'action' => 'update',
                'table' => 'hdcasejenis',
                'column_value' => array(
                    
                    'kejadian_jenis' => $kejadian_jenis,
                    'kejadian_keterangan' => $kejadian_keterangan
                ),
                'where' => 'kejadian_jenis = \''.$id.'\''
            ));
            redirect('hdcasejenis/edit/'.$id.'');
        }
        $this->get_hdcasejenis->process(array(
            'action' => 'select',
            'table' => 'hdcasejenis',
            'column_value' => array(
                
                'kejadian_jenis',
                'kejadian_keterangan'
            ),
            'where' => 'kejadian_jenis = \''.$id.'\''
        ));
        $this->layout->loadView('hdcasejenis_form', array(
            
            'kejadian_jenis' => $this->row->{'kejadian_jenis'},
            'kejadian_keterangan' => $this->row->{'kejadian_keterangan'}
        ));
    }
    
    public function add(){
        if($this->input->post('kejadian_jenis')){
            
            $kejadian_jenis = $this->input->post('kejadian_jenis');
            $kejadian_keterangan = $this->input->post('kejadian_keterangan');
            $this->get_hdcasejenis->process(array(
                'action' => 'insert',
                'table' => 'hdcasejenis',
                'column_value' => array(
                    
                    'kejadian_jenis' => $kejadian_jenis,
                    'kejadian_keterangan' => $kejadian_keterangan
                )
            ));
            redirect('hdcasejenis/add');
        }
        $this->layout->loadView('hdcasejenis_form');
    }
    
    public function index() {
        $this->layout->loadView(
            'hdcasejenis_list',
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