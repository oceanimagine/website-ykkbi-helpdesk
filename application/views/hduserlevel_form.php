<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Hduserlevel Form</title>
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
                <label for="kode_level" class="col-lg-2 control-label">Kode Level</label>
                <div class="col-lg-10">
                    <input type="text" id="kode_level" class="form-control" name="kode_level" placeholder="Kode Level" value="<?php echo isset($kode_level) ? $kode_level : ""; ?>">
                </div>
            </div>
                                                                                                                                                                                    
            <div class="form-group">
                <label for="nama_level" class="col-lg-2 control-label">Nama Level</label>
                <div class="col-lg-10">
                    <input type="text" id="nama_level" class="form-control" name="nama_level" placeholder="Nama Level" value="<?php echo isset($nama_level) ? $nama_level : ""; ?>">
                </div>
            </div>
                                                                                                                                                            
            <div class="box-footer"></div>
            
            <div class="form-group">
                <div class="col-lg-6 col-md-6" style="margin-bottom: 40px;">
                    <button style="width: 100%; background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #f1f1f1), color-stop(1, #ffffff)) !important; color: black; border-color: #adadad;" type="submit" class="btn btn-info pull-right bg-light-blue-gradient" name="input_hduserlevel" value="Input Hduserlevel">Input Hduserlevel</button>
                </div>
                <div class="col-lg-6 col-md-6">
                    <button style="width: 100%; background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #f1f1f1), color-stop(1, #ffffff)) !important;" type="button" class="btn btn-default bg-aqua-gradient" onclick="move_url('hduserlevel');">Lihat Data</button>
                </div>
            </div>
        </div>
    </form>
    
    </body>
</html>