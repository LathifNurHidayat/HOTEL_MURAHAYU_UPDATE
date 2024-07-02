<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style_regis.css" >
  </head>
  <body>
  

    
    <form method="POST" action="aksi_regist.php">
      <center><h2>REGISTRASI AKUN</h2></center>
      <input type="text" name="nama" value="" autocomplete="off" placeholder="Nama Lengkap">
      <br/>
      <input type="email" name="email" value="" autocomplete="off" placeholder="Email">
      <br/>
      <input type="password" name="password" value="" autocomplete="off" placeholder="Password">
      <br/>
      <input type="submit" name="submit" value="Register">
      <br>
      <p>Sudah punya akun ? <a href="login.php">Login</a></p>
    </form>
  </body>
</html>