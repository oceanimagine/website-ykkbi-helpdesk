<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Hdcasedaftar Form</title>
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
                <label for="notiket_display" class="col-lg-2 control-label">Notiket</label>
                <div class="col-lg-10">
                    <input disabled type="text" id="notiket_display" class="form-control" name="notiket_display" placeholder="Notiket" value="<?php echo isset($notiket) ? $notiket : ""; ?>">
                    <input type="hidden" id="notiket" class="form-control" name="notiket" value="<?php echo isset($notiket) ? $notiket : ""; ?>">
                </div>
            </div>
                                                                                                                                                                                    
            <div class="form-group">
                <label for="pelaporan_tgl" class="col-lg-2 control-label">Pelaporan Tgl</label>
                <div class="col-lg-10">
                    <input type="text" id="pelaporan_tgl" class="form-control tanggal_pilih" name="pelaporan_tgl" placeholder="Pelaporan Tgl" value="<?php echo isset($pelaporan_tgl) ? $pelaporan_tgl : ""; ?>">
                </div>
            </div>
                                                                                                                                                                                    
            <div class="form-group">
                <label for="pelaporan_jam" class="col-lg-2 control-label">Pelaporan Jam</label>
                <div class="col-lg-10">
                    <input type="text" id="pelaporan_jam" class="form-control jam" name="pelaporan_jam" placeholder="Pelaporan Jam" value="<?php echo isset($pelaporan_jam) ? $pelaporan_jam : ""; ?>">
                </div>
            </div>
                                                                                                                                                                                    
            <div class="form-group">
                <label for="pelapor_nip" class="col-lg-2 control-label">Pelapor Nip</label>
                <div class="col-lg-10">
                    <input type="text" id="pelapor_nip" class="form-control" name="pelapor_nip" placeholder="Pelapor Nip" value="<?php echo isset($pelapor_nip) ? $pelapor_nip : ""; ?>">
                </div>
            </div>
                                                                                                                                                                                    
            <div class="form-group">
                <label for="pelapor_satker" class="col-lg-2 control-label">Pelapor Satker</label>
                <div class="col-lg-10">
                    <input type="text" id="pelapor_satker" class="form-control" name="pelapor_satker" placeholder="Pelapor Satker" value="<?php echo isset($pelapor_satker) ? $pelapor_satker : ""; ?>">
                </div>
            </div>
                                                                                                                                                                                    
            <div class="form-group">
                <label for="kejadian_jenis" class="col-lg-2 control-label">Kejadian Jenis</label>
                <div class="col-lg-10">
                    <input type="text" id="kejadian_jenis" class="form-control" name="kejadian_jenis" placeholder="Kejadian Jenis" value="<?php echo isset($kejadian_jenis) ? $kejadian_jenis : ""; ?>">
                </div>
            </div>
                                                                                                                                                                                    
            <div class="form-group">
                <label for="kejadian_deskripsi" class="col-lg-2 control-label">Kejadian Deskripsi</label>
                <div class="col-lg-10">
                    <input type="text" id="kejadian_deskripsi" class="form-control" name="kejadian_deskripsi" placeholder="Kejadian Deskripsi" value="<?php echo isset($kejadian_deskripsi) ? $kejadian_deskripsi : ""; ?>">
                </div>
            </div>
                                                                                                                                                                                    
            <div class="form-group">
                <label for="prioritas" class="col-lg-2 control-label">Prioritas</label>
                <div class="col-lg-10">
                    <input type="text" id="prioritas" class="form-control" name="prioritas" placeholder="Prioritas" value="<?php echo isset($prioritas) ? $prioritas : ""; ?>">
                </div>
            </div>
                                                                                                                                                                                    
            <div class="form-group">
                <label for="kejadian_status" class="col-lg-2 control-label">Kejadian Status</label>
                <div class="col-lg-10">
                    <input type="text" id="kejadian_status" class="form-control" name="kejadian_status" placeholder="Kejadian Status" value="<?php echo isset($kejadian_status) ? $kejadian_status : ""; ?>">
                </div>
            </div>
                                                                                                                                                                                    
            <div class="form-group">
                <label for="penyelesaian_keterangan" class="col-lg-2 control-label">Penyelesaian Keterangan</label>
                <div class="col-lg-10">
                    <input type="text" id="penyelesaian_keterangan" class="form-control" name="penyelesaian_keterangan" placeholder="Penyelesaian Keterangan" value="<?php echo isset($penyelesaian_keterangan) ? $penyelesaian_keterangan : ""; ?>">
                </div>
            </div>
                                                                                                                                                                                    
            <div class="form-group">
                <label for="penyelesaian_tgl" class="col-lg-2 control-label">Penyelesaian Tgl</label>
                <div class="col-lg-10">
                    <input type="text" id="penyelesaian_tgl" class="form-control tanggal_pilih" name="penyelesaian_tgl" placeholder="Penyelesaian Tgl" value="<?php echo isset($penyelesaian_tgl) ? $penyelesaian_tgl : ""; ?>">
                </div>
            </div>
                                                                                                                                                                                    
            <div class="form-group">
                <label for="penyelesaian_nip" class="col-lg-2 control-label">Penyelesaian Nip</label>
                <div class="col-lg-10">
                    <input type="text" id="penyelesaian_nip" class="form-control" name="penyelesaian_nip" placeholder="Penyelesaian Nip" value="<?php echo isset($penyelesaian_nip) ? $penyelesaian_nip : ""; ?>">
                </div>
            </div>
                                                                                                                                                                                    
            <div class="form-group">
                <label for="inputnama" class="col-lg-2 control-label">Inputnama</label>
                <div class="col-lg-10">
                    <input type="text" id="inputnama" class="form-control" name="inputnama" placeholder="Inputnama" value="<?php echo isset($inputnama) ? $inputnama : ""; ?>">
                </div>
            </div>
                                                                                                                                                                                    
            <div class="form-group">
                <label for="inputtgl" class="col-lg-2 control-label">Inputtgl</label>
                <div class="col-lg-10">
                    <input type="text" id="inputtgl" class="form-control tanggal_pilih" name="inputtgl" placeholder="Inputtgl" value="<?php echo isset($inputtgl) ? $inputtgl : ""; ?>">
                </div>
            </div>
                                                                                                                                                                                    
            <div class="form-group">
                <label for="inputjam" class="col-lg-2 control-label">Inputjam</label>
                <div class="col-lg-10">
                    <input type="text" id="inputjam" class="form-control jam" name="inputjam" placeholder="Inputjam" value="<?php echo isset($inputjam) ? $inputjam : ""; ?>">
                </div>
            </div>
                                                                                                                                                            
            <div class="box-footer"></div>
            
            <div class="form-group">
                <div class="col-lg-6 col-md-6" style="margin-bottom: 40px;">
                    <button style="width: 100%; background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #f1f1f1), color-stop(1, #ffffff)) !important; color: black; border-color: #adadad;" type="submit" class="btn btn-info pull-right bg-light-blue-gradient" name="input_hdcasedaftar" value="Input Hdcasedaftar">Input Hdcasedaftar</button>
                </div>
                <div class="col-lg-6 col-md-6">
                    <button style="width: 100%; background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #f1f1f1), color-stop(1, #ffffff)) !important;" type="button" class="btn btn-default bg-aqua-gradient" onclick="move_url('hdcasedaftar');">Lihat Data</button>
                </div>
            </div>
        </div>
    </form>
    
    </body>
</html>