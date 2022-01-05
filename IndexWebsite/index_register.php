<!DOCTYPE html>
<html>
    <head>
        <title>
            REGISTER WEBSITE HOME
        </title>
    </head>
    <body>
        <?php
        if(isset($_GET['pesan'])){
            if($_GET['progress'] > $password && $repassword > 8 == 'belum aman'){
                echo 'Password anda belum aman';
            }else if($_GET['pesan'] > $password && $repassword > 16 == 'sudah aman'){
                echo 'password anda sudah kuat dan aman';
            }else{
                echo 'password gampang terbongkar';
                }
            }
        ?>
        <div class="form-register">
            <form method="POST" action="../IndexWebsite/connect/register.php">
                <fieldset name="register">
                    <br>REGISTER HOME FOR LOGIN WEBSITE<br>
                    <center>
                        <br>
                            <table>
                                <div class="group_input">
                                    <tr>
                                        <td>Emailing</td>
                                        <td>
                                            <input type="text" name="email" placeholder="masukan emailing yang dibuat" class="emailing">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td>
                                            <input type="password" name="password" placeholder="masukan password" class="password">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Re-Password</td>
                                        <td>
                                            <input type="password" name="repassword" placeholder="masukan ulang password" class="repass">
                                        </td>
                                    </tr>
                                </div>
                                <div class="group_jeniskelamin">
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>
                                            <input type="radio" name="jeniskelamin" value="laki">Laki-Laki
                                            <input type="radio" name="jeniskelamin" value="perempuan">Perempuan
                                        </td>
                                    </tr>
                                </div>
                                <div class="group_datebirth">
                                    <tr>
                                        <td>Date Birthday</td>
                                        <td>
                                            <input type="date" name="datebirth" value="datebirth">
                                        </td>
                                    </tr>
                                </div>
                            </table>
                    </center>
                    <br>
                    <center><input type="submit" value="CLICK HERE" class="clickhere" style="text-align: center; font-size:14px;">
                </fieldset>
            </form>
        </div>
        <style>
            fieldset{
                text-align: center;
                font-size: 16px;
                font-weight: 800;
                margin-left: 50px;
                margin-right: 50px;
                margin-top: 25px;
                margin-bottom: 25px;
                border-radius: 50px 50px 25px 25px;
            }
            input{
                text-align: start;
                padding: auto;
            }
            .emailing{
                font: normal;
                font-size: 14px;
                font-family: 'Times New Roman', Times, serif;
                display:block;
            }
            .user{
                font:normal;
                font-size: 14px;
                font-family: 'Times New Roman', Times, serif;
                display:block;
            }
            .password{
                font:normal;
                font-size: 14px;
                font-family: 'Times New Roman', Times, serif;
                display:block;
            }
            .repass{
                font:normal;
                font-size: 14px;
                font-family: 'Times New Roman', Times, serif;
                display:block;
            }
        </style>
    </body>
</html>