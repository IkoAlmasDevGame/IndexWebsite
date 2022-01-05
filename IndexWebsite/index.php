<!DOCTYPE html>
<html>
    <head>
        <title>Website Index Official</title>
    </head>
    <body style="background-color: whitesmoke;">
        <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == 'gagal'){
                echo "email dan password anda salah, silahkan coba lagi";
            }else if($_GET['pesan'] == 'logout'){
                echo 'logout telah berhasil';
            }else if($_GET['pesan'] == 'belum_login'){
                echo 'Anda harus login untuk mengakses halaman admin';
            }
        }
        ?>
        <h1 style="text-align: center;">Website Official Beta Index</h1>
        <div class="form_menu">
            <form method="POST" action="../IndexWebsite/connect/login.php">
                <br>
                <br>
                <fieldset name="login"><br><br>Login Home Website
                    <center>
                        <br>
                        <table>
                            <div class="input_group">
                                <tr>
                                    <div class="input_emil">
                                        <td>Email Anda :</td>
                                        <td>
                                            <input type="text" name="email" placeholder="masukan email anda" class="input_emailing">
                                        </td>
                                    </div>
                                </tr>
                            <div class="input_password">
                                <tr>
                                    <td>Kata Sandi :</td>
                                        <td>
                                            <input type="password" name="password" placeholder="masukan password anda" class="input_pass">
                                        </td>
                                    </tr>
                                </div>
                            </div>
                        </table>
                        <br>
                        <input type="submit" value="LOGIN" name="submit" id="submit" style="text-align: center;">
                    </center>
                    <br>
                        <p>Anda belum punya akun di website ini? <a href="index_register.php">register</a></p>
                        <br>
                        <div class="info">
                            <fieldset style="border-radius: 0px 0px 0px 0px; font-size:18px; font:normal; font-weight:normal; text-align:start;">
                            INFORMATION :

                            </fieldset>
                        </div>
                    </fieldset>
            </form>
        </div>
        <style>
            fieldset{
                text-align: center;
                font-size: 21px;
                font-weight: 800;
                margin-left: 50px;
                margin-right: 50px;
                margin-top: 25px;
                margin-bottom: 25px;
                border-radius: 50px 50px 25px 25px;
            }
            input{
                text-align: start;
                font-size: 14px;
                font-family: 'Times New Roman', Times, serif;
            }
            p{
                font-size: 21px;
                text-align: center;
                font-weight: 500;
                font-family: 'Times New Roman', Times, serif;
                font: normal;
            }
        </style>
    </body>
</html>