<?php 

class get_hdcasedaftar extends CI_Model {

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
            $clouse = " where notiket like '%" . $sSearch . "%' ";
        }

        $sql_total = "select notiket, pelaporan_tgl, pelaporan_jam, pelapor_nip, pelapor_satker, kejadian_jenis, kejadian_deskripsi, prioritas, kejadian_status, penyelesaian_keterangan, penyelesaian_tgl, penyelesaian_nip, inputnama, inputtgl, inputjam from hdcasedaftar" . $clouse . "";

        $query_total = $this->db->query($sql_total);
        $total = $query_total->num_rows();
        
        if((isset($_SESSION['userlevel']) && isset($GLOBALS['privilege_ti'][$_SESSION['userlevel']]) && $GLOBALS['privilege_ti'][$_SESSION['userlevel']])){
            $sql = "
                select
                    notiket as id,
                    notiket,
                    pelaporan_tgl, 
                    pelaporan_jam, 
                    pelapor_nip, 
                    pelapor_satker, 
                    kejadian_jenis,
                    penyelesaian_tgl, 
                    penyelesaian_nip, 
                    inputnama, 
                    inputtgl, 
                    inputjam 
                from 
                    hdcasedaftar".$clouse." 
                order by notiket asc limit $iDisplayStart , $iDisplayLength
            ";
        }
        
        if((isset($_SESSION['userlevel']) && isset($GLOBALS['privilege_satker'][$_SESSION['userlevel']]) && $GLOBALS['privilege_satker'][$_SESSION['userlevel']])){
            $sql = "
                select 
                    notiket as id,
                    notiket,
                    pelaporan_tgl, 
                    pelaporan_jam, 
                    pelapor_nip, 
                    pelapor_satker, 
                    kejadian_jenis,
                    prioritas, 
                    kejadian_status,
                    inputtgl, 
                    inputjam 
                from 
                    hdcasedaftar".$clouse." 
                order by notiket asc limit $iDisplayStart , $iDisplayLength
            ";
        }
        
        if(((isset($_SESSION['PRI']) && $_SESSION['PRI'] == "SUPERADMIN") || (isset($_SESSION['PRI']) && $_SESSION['PRI'] == "ADMIN"))){
            $sql = "
                select 
                    notiket as id,
                    notiket, 
                    pelaporan_tgl, 
                    pelaporan_jam, 
                    pelapor_nip, 
                    pelapor_satker, 
                    kejadian_jenis,
                    prioritas, 
                    kejadian_status, 
                    penyelesaian_tgl, 
                    penyelesaian_nip, 
                    inputnama, 
                    inputtgl, 
                    inputjam 
                from 
                    hdcasedaftar".$clouse." 
                order by notiket asc limit $iDisplayStart , $iDisplayLength       
            ";
        }
        $page = ($iDisplayStart / $iDisplayLength);

        $resuld = $process_table->coba_db($sql, $page, $iDisplayLength, true, "../../../index.php/hdcasedaftar/edit", "../../../index.php/hdcasedaftar/hapus");

        $output = array(
            'sEcho' => $sEcho,
            'iTotalRecords' => $total,
            'iTotalDisplayRecords' => $total,
            'aaData' => $resuld
        );

        echo json_encode($output, JSON_HEX_QUOT | JSON_HEX_TAG);
    }

}