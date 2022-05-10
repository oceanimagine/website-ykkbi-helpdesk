<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Hdsatker Form</title>
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
            
            <?php if(!isset($satker_nama)){ ?>
            <div class="form-group">
                <label for="satker_kode" class="col-lg-2 control-label">Satker Kode</label>
                <div class="col-lg-10">
                    <input required type="text" maxlength="10" id="satker_kode" class="form-control" name="satker_kode" placeholder="Satker Kode" value="<?php echo isset($satker_kode) ? $satker_kode : ""; ?>">
                </div>
            </div>
            <?php } ?>
                                                                                                                                                                                    
            <div class="form-group">
                <label for="satker_nama" class="col-lg-2 control-label">Satker Nama</label>
                <div class="col-lg-10">
                    <input required type="text" id="satker_nama" class="form-control" name="satker_nama" placeholder="Satker Nama" value="<?php echo isset($satker_nama) ? $satker_nama : ""; ?>">
                </div>
            </div>
                                                                                                                                                            
            <div class="box-footer"></div>
            
            <div class="form-group">
                <div class="col-lg-6 col-md-6" style="margin-bottom: 40px;">
                    <button style="width: 100%; background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #f1f1f1), color-stop(1, #ffffff)) !important; color: black; border-color: #adadad;" type="submit" class="btn btn-info pull-right bg-light-blue-gradient" name="input_hdsatker" value="Input Hdsatker">Input Hdsatker</button>
                </div>
                <div class="col-lg-6 col-md-6">
                    <button style="width: 100%; background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #f1f1f1), color-stop(1, #ffffff)) !important;" type="button" class="btn btn-default bg-aqua-gradient" onclick="move_url('hdsatker');">Lihat Data</button>
                </div>
            </div>
        </div>
    </form>
    
    </body>
</html>