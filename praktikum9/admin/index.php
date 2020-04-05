<!DOCTYPE html>
<html>
<head>
        <title>FORM LOGIN</title>
    <style type="text/css">
    table {
        font-family: Verdana, Arial, Helvetica, sans-serif;
        font-size: 11px;}
    input {
        font-family: Verdana, Arial, Helvetica, sans-serif;
        font-size: 11px;
        height: 20px;}
    </style>
    </head>
    <body bgcolor="#cccccc">   
    <br />
        <div align="center">
            <form name="form-login" method="POST" action="login.php">
                <table width="500" border="0" cellpadding="0" cellspacing="0">
                    <tr bgcolor="#778899">
                        <td height="25" colspan="2" align="center"><font color="#FFFFFF">Form Login</font></td>
                    </tr>
                    <tr>
                        <td width="106" height="16"> </td>
                        <td width="180"> </td>
                    </tr>
                    <tr>
                        <td height="18" align="right">Username : </td>
                        <td><input type="text" name="user" size="20" maxlength="9" placeholder="Masukkan Username"></td>
                    </tr>
                    <td></td>
                    <td></td>
                    <tr>
                        <td height="18" align="right">Password : </td>
                        <td><input type="password" name="password" size="20" placeholder="Masukkan Password"></td>
                    </tr>
                    <tr>
                        <td height="16"> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td height="18" align="top"> </td>
                        <td align="left"><input type="submit" value=" Login "></td>
                    </tr>
                    <tr>
                        <td height="16"> </td>
                        <td> </td>
                    </tr>
                    <tr bgcolor="#778899">
                        <td height="25" colspan="2" align="top"> </td>
                    </tr>
    <?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "Login gagal! username dan password salah!";
        }else if($_GET['pesan'] == "logout"){
            echo "Anda telah berhasil logout";
        }else if($_GET['pesan'] == "belum_login"){
            echo "Anda harus login untuk mengakses halaman cetak";
        }
    }
    ?>
                </table>
            </form>
        </div>
    </body>
</html>
