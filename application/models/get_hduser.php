<?php 

class get_hduser extends CI_Model {

    function __construct(){
        $this->param = new process_param();
        parent::__construct();
    }

    /* Process Database */
    function process($param){
        return $this->param->process($param);
    }

    function get_data(){

        $process_table = new process_table();

        $sEcho = isset($_GET["sEcho"]) ? $_GET["sEcho"] : '0';
        $iDisplayLength = isset($_GET["iDisplayLength"]) ? intval($_GET["iDisplayLength"]) : 10;
        $iDisplayStart = isset($_GET["iDisplayStart"]) ? intval($_GET["iDisplayStart"]) : 0;
        $sSearch = isset($_GET["sSearch"]) ? $_GET["sSearch"] : '';

        $clouse = "";

        if ($sSearch != '') {
            $clouse = " where user_nama like '%" . $sSearch . "%' or user_id like '%" . $sSearch . "%' ";
        }

        $sql_total = "select user_id, user_password, user_nip, user_nama, user_satker, user_email, user_level, inputnama, inputtgl, inputjam from hduser" . $clouse . "";

        $query_total = $this->db->query($sql_total);
        $total = $query_total->num_rows();

        $sql = "select user_id, user_password, user_nip, user_nama, user_satker, user_email, user_level, inputnama, inputtgl, inputjam from hduser".$clouse." order by user_id asc limit $iDisplayStart , $iDisplayLength";

        $page = ($iDisplayStart / $iDisplayLength);

        $resuld = $process_table->coba_db($sql, $page, $iDisplayLength, true, "../../../index.php/hduser/edit", "../../../index.php/hduser/hapus");

        $output = array(
            'sEcho' => $sEcho,
            'iTotalRecords' => $total,
            'iTotalDisplayRecords' => $total,
            'aaData' => $resuld
        );

        echo json_encode($output, JSON_HEX_QUOT | JSON_HEX_TAG);
    }

}