<!DOCTYPE html>
<html>
<head>
   <title>Membuat login multi user level dengan PHP dan MySQLi - www.malasngoding.com</title>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

   <h1>membuat login multi user level dengan PHP dan MySQLi <br/> WWW.malasngoding.com</h1>

   <?php  
     if(isset($_GET['pesan'])){
       if($_GET['pesan']=="gagal"){
          echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
          }
      }
?>
<div class="kotak_login">
<p class="tulisan_login">silahkan login</p>

<from action="cek_login.php" method="post">
        <lebel>Username</label>
        <input type="text" name="username" class="form_login" placeholder="username .." requider="requider">

    <label>password</label>
    <input  type="password" name="password" class="form_login" placeholder="password .." required="requidred">

<input type="submit" class="tombol_login" value="LOGIN">

    <br/>
    <br/>
    <center>
      <a class="link" href="http://www.malasngoding.com">kembali</a>
   </center>
  </form>

 </div>


</body>
</html>
