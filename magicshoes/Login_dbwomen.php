<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body> 
    <div class="kotak_login">
        <p class="tulisan_login">Silahkan login</p>
 
        <form method="POST" action="cek_login_dbwomen.php">
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="Username atau email ..">
 
            <label>Password</label>
            <input type="text" name="password" class="form_login" placeholder="Password ..">
 
            <input type="submit" class="tombol_login" value="LOGIN">
 
            <br/>
            <br/>
            <center>
                <a class="link" href="index.php">kembali</a>
            </center>
        </form>
        
    </div>
 
 
</body>
</html>