<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Hduser Form</title>
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
                                                                                    
            <?php 
            $gabungan = "";
            if(!isset($user_id)){
                $connect = get_connection();
                $query_max = mysqli_query($connect, "select user_id from hduser order by user_id desc");
                if(mysqli_num_rows($query_max) > 0){
                    $hasil_max = mysqli_fetch_array($query_max);
                    $only_number = (int) substr($hasil_max['user_id'], -5);
                    $only_number_plus_1 = $only_number + 1;
                } else {
                    $only_number_plus_1 = 1;
                }
                $gabungan = "HDUSER" . samakan($only_number_plus_1, "10000");
            }
            ?>
            
            <div class="form-group">
                <label for="user_id" class="col-lg-2 control-label">User Id</label>
                <div class="col-lg-10">
                    <input required readonly type="text" id="user_id" class="form-control" name="user_id" placeholder="User Id" value="<?php echo isset($user_id) ? $user_id : $gabungan; ?>">
                </div>
            </div>
                                                                                                                                                            
            <div class="form-group">
                <label for="user_password" class="col-lg-2 control-label">User Password</label>
                <div class="col-lg-10">
                    <input type="password" id="user_password" class="form-control" name="user_password" placeholder="User Password" value="<?php echo isset($user_password) ? $user_password : ""; ?>">
                </div>
            </div>
                                                                                                                                                                                    
            <div class="form-group">
                <label for="user_nip" class="col-lg-2 control-label">User Nip</label>
                <div class="col-lg-10">
                    <input type="text" id="user_nip" class="form-control" name="user_nip" placeholder="User Nip" value="<?php echo isset($user_nip) ? $user_nip : ""; ?>">
                </div>
            </div>
                                                                                                                                                                                    
            <div class="form-group">
                <label for="user_nama" class="col-lg-2 control-label">User Nama</label>
                <div class="col-lg-10">
                    <input type="text" id="user_nama" class="form-control" name="user_nama" placeholder="User Nama" value="<?php echo isset($user_nama) ? $user_nama : ""; ?>">
                </div>
            </div>
                                                                                                                                                                                    
            <div class="form-group">
                <label for="user_satker" class="col-lg-2 control-label">User Satker</label>
                <div class="col-lg-10">
                    <input type="text" id="user_satker" class="form-control" name="user_satker" placeholder="User Satker" value="<?php echo isset($user_satker) ? $user_satker : ""; ?>">
                </div>
            </div>
                                                                                                                                                                                    
            <div class="form-group">
                <label for="user_email" class="col-lg-2 control-label">User Email</label>
                <div class="col-lg-10">
                    <input type="email" id="user_email" class="form-control" name="user_email" placeholder="User Email" value="<?php echo isset($user_email) ? $user_email : ""; ?>">
                </div>
            </div>
                                                                                                                                                                                    
            <div class="form-group">
                <label for="user_level" class="col-lg-2 control-label">User Level</label>
                <div class="col-lg-10">
                    <input type="text" id="user_level" class="form-control" name="user_level" placeholder="User Level" value="<?php echo isset($user_level) ? $user_level : ""; ?>">
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
                    <button style="width: 100%; background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #f1f1f1), color-stop(1, #ffffff)) !important; color: black; border-color: #adadad;" type="submit" class="btn btn-info pull-right bg-light-blue-gradient" name="input_hduser" value="Input Hduser">Input Hduser</button>
                </div>
                <div class="col-lg-6 col-md-6">
                    <button style="width: 100%; background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #f1f1f1), color-stop(1, #ffffff)) !important;" type="button" class="btn btn-default bg-aqua-gradient" onclick="move_url('hduser');">Lihat Data</button>
                </div>
            </div>
        </div>
    </form>
    
    </body>
</html>