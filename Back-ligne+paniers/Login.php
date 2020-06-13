<?php
if($_POST['User'] and $_POST['Password']){
session_start();
$servername = "localhost";
$username = "root";
$password = "1234";
$database = "Login";

    $db = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $db->query("SELECT * FROM User Where User='".$_POST['User']."' AND Password='".$_POST['Password']."'", PDO::FETCH_ASSOC);
      if ( $query->rowCount() ){
       foreach( $query as $row ){ 
          $_SESSION['Name'] = $row['Name'];
          header('Location: index.php');
                                 } 
								}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro.min.css">
<link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-colors.min.css">
<link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-rtl.min.css">
<link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-icons.min.css">
<script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form method="post">
  <div class="form-group">
        <label>User Name </label>
        <input type="text" name="User"/>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="Password"/>
    </div>
    <div class="form-group"></div>
  <div class="form-group">
        <button class="button success">Login</button>
    </div>
</form>
</body>
</html>
