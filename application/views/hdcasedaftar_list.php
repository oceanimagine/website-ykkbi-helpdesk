<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Hdcasedaftar List</title>
        <style type="text/css">
            html, body {
                font-family: consolas, monospace;
                cursor: default;
                width: 100%;
                height: 100%;
                margin: 0px;
                padding: 0px;
            }
            pre {
                font-family: consolas, monospace;
            }
        </style>
	<script type="text/javascript">
            /* Put JS Here */
            window.onload = function(){
	        var tempat_script = document.getElementById("tempat_script");
	        var script = document.createElement("script");
	        script.setAttribute("type","text/javascript");
	        script.innerHTML = tempat_script.innerHTML;
	        document.body.appendChild(script);
                tempat_script.parentNode.removeChild(tempat_script);
                
	    }; 
            function move_url(link){
                document.location = "../../../index.php/" + link;
            }
            function confirm_delete(param){
                var split_ = param.split("index.php/");
                var button_confirm = document.getElementById("button-confirm");
                button_confirm.setAttribute("onclick", "move_url('"+split_[1]+"')");
            }
            
	</script>
</head>
<body>
    
    <script type="text/javascript" id="tempat_script">
    if(typeof $ !== "undefined"){
        <?php echo $script; ?>        
    }
    </script>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12 col-lg-12a">
                <div class="panel panel-success" style="font-family: consolas, monospace !important; cursor: default; border-color: #adadad;">
                    <!-- Default panel contents -->
                    <div class="panel-heading" style="padding-bottom: 10px; color: black; background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #f1f1f1), color-stop(1, #ffffff)) !important;">
                        List Hdcasedaftar  
                        <?php if((isset($_SESSION['userlevel']) && isset($GLOBALS['privilege_satker'][$_SESSION['userlevel']]) && $GLOBALS['privilege_satker'][$_SESSION['userlevel']]) || ((isset($_SESSION['PRI']) && $_SESSION['PRI'] == "SUPERADMIN") || (isset($_SESSION['PRI']) && $_SESSION['PRI'] == "ADMIN"))){ ?>
                        <a id="addData" href="../../../index.php/hdcasedaftar/add" class="btn btn-primary btn-xs pull-right hidden-xs bg-green-gradient"><span class="glyphicon glyphicon-plus"></span>&nbsp;New Hdcasedaftar</a>
                        <?php } ?>
                    </div>
                    <table id="table-data" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                                                                                
                                <th>Notiket</th>                                                                                                
                                
                                <?php if((isset($_SESSION['userlevel']) && isset($GLOBALS['privilege_satker'][$_SESSION['userlevel']]) && $GLOBALS['privilege_satker'][$_SESSION['userlevel']]) || ((isset($_SESSION['PRI']) && $_SESSION['PRI'] == "SUPERADMIN") || (isset($_SESSION['PRI']) && $_SESSION['PRI'] == "ADMIN"))){ ?>
                                <th>Pelaporan Tanggal</th>                                                                                                
                                <th>Pelaporan Jam</th>                                                                                                
                                <th>Pelapor Nip</th>                                                                                                
                                <th>Pelapor Satker</th>                                                                                                
                                <th>Kejadian Jenis</th>                                                                                                
                                <th>Prioritas</th>                                                                                                
                                <th>Kejadian Status</th> 
                                
                                <?php if((isset($_SESSION['userlevel']) && isset($GLOBALS['privilege_satker'][$_SESSION['userlevel']]) && $GLOBALS['privilege_satker'][$_SESSION['userlevel']])){ ?>
                                <th>Input Tanggal</th>                                                                                                
                                <th>Input Jam</th> 
                                <?php } ?>
                                
                                <?php } ?>
                                
                                <?php if((isset($_SESSION['userlevel']) && isset($GLOBALS['privilege_ti'][$_SESSION['userlevel']]) && $GLOBALS['privilege_ti'][$_SESSION['userlevel']]) || ((isset($_SESSION['PRI']) && $_SESSION['PRI'] == "SUPERADMIN") || (isset($_SESSION['PRI']) && $_SESSION['PRI'] == "ADMIN"))){ ?>
                                
                                <?php if((isset($_SESSION['userlevel']) && isset($GLOBALS['privilege_ti'][$_SESSION['userlevel']]) && $GLOBALS['privilege_ti'][$_SESSION['userlevel']])){ ?>
                                <th>Pelaporan Tanggal</th>                                                                                                
                                <th>Pelaporan Jam</th> 
                                <th>Pelapor Nip</th>                                                                                                
                                <th>Pelapor Satker</th>   
                                <th>Kejadian Jenis</th>  
                                <?php } ?>
                                
                                <th>Penyelesaian Tanggal</th>                                                                                                
                                <th>Penyelesaian Nip</th>                                                                                                
                                <th>Penyelesaian Nama Lengkap</th>                                                                                                
                                <th>Input Tanggal</th>                                                                                                
                                <th>Input Jam</th>    
                                <?php } ?>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>  
                </div> <!-- end panel  -->
            </div>
        </div>
        <!-- /.row -->
    </div>
    
</body>
</html>