<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Hdcasejenis Form</title>
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
        function move_url(link){
            document.location = "../../../index.php/" + link;
        }
        /* JS Latlong Here */ 

    </script>
</head>
<body>
    <form class="form-horizontal" method="POST" enctype="multipart/form-data">
        <div class="box-body">
                                                            
            <div class="form-group">
                <label for="kejadian_jenis" class="col-lg-2 control-label">Kejadian Jenis</label>
                <div class="col-lg-10">
                    <input type="text" id="kejadian_jenis" class="form-control" name="kejadian_jenis" placeholder="Kejadian Jenis" value="<?php echo isset($kejadian_jenis) ? $kejadian_jenis : ""; ?>">
                </div>
            </div>
                                                                                                                                                                                    
            <div class="form-group">
                <label for="kejadian_keterangan" class="col-lg-2 control-label">Kejadian Keterangan</label>
                <div class="col-lg-10">
                    <input type="text" id="kejadian_keterangan" class="form-control" name="kejadian_keterangan" placeholder="Kejadian Keterangan" value="<?php echo isset($kejadian_keterangan) ? $kejadian_keterangan : ""; ?>">
                </div>
            </div>
                                                                                                                                                            
            <div class="box-footer"></div>
            
            <div class="form-group">
                <div class="col-lg-6 col-md-6" style="margin-bottom: 40px;">
                    <button style="width: 100%; background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #f1f1f1), color-stop(1, #ffffff)) !important; color: black; border-color: #adadad;" type="submit" class="btn btn-info pull-right bg-light-blue-gradient" name="input_hdcasejenis" value="Input Hdcasejenis">Input Hdcasejenis</button>
                </div>
                <div class="col-lg-6 col-md-6">
                    <button style="width: 100%; background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #f1f1f1), color-stop(1, #ffffff)) !important;" type="button" class="btn btn-default bg-aqua-gradient" onclick="move_url('hdcasejenis');">Lihat Data</button>
                </div>
            </div>
        </div>
    </form>
    
    </body>
</html>