<?php require_once('Connections/koneksi.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['username'])) {
  $loginUsername=$_POST['username'];
  $password=$_POST['password'];
  $MM_fldUserAuthorization = "level";
  $MM_redirectLoginFailed = "login.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_koneksi, $koneksi);
  	
  $LoginRS__query=sprintf("SELECT username, password, level FROM `user` WHERE username=%s AND password=%s",
  GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $koneksi) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
    
    $loginStrGroup  = mysql_result($LoginRS,0,'level');
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	
	
	$MM_redirectLoginSuccess = $loginStrGroup."/index.php";      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
	
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
	
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SISFO BKK | SMK Negeri 1 Bawang</title>
<style type="text/css">
body{
	font-size:12px;
	font-family:Arial, Helvetica, sans-serif;
	background-image:url(images/teamwork.jpg);
	background-repeat:no-repeat;
	background-position: 0px 0px;
}
table{
}
input{
	border:#CCC 1px solid;
	padding:5px;
	width:70%;
}
h2{
	text-align:center;
	background:#F60;
}
#login {
	margin:auto;
	background-color:#FFF;
	width:300px;
	padding:10px;
	border-radius:10px;
	box-shadow:#666 0px 0px 4px;
}
.logo{
	
}
td{
	padding:5px;
}
.masuk{
	width:100px;
	
	
}
th{
	font-size:16px;
	padding:10px;
}
</style>
</head>
<body>
<p>&nbsp;</p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="logo">
      <tr>
        <td align="center"><h1>SISFO BURSA KERJA KHUSUS WAHANA KARYA</h1></td>
      </tr>
      <tr>
        <td align="center"><h3>SMK NEGERI 1 BAWANG</h3></td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
      <tr align="right">
        <td><form id="login" name="login" method="post" action="<?php echo $loginFormAction; ?>">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="293" align="center"><strong>Username</strong></td>
            </tr>
            <tr>
              <td align="center"><input type="text" name="username" id="username"  /></td>
            </tr>
            <tr>
              <td align="center"><strong>Password</strong></td>
            </tr>
            <tr>
              <td align="center"><input type="password" name="password" id="password"  /></td>
            </tr>
            <tr>
              <td align="center"><input name="button" type="submit" class="masuk" id="button" value="Masuk" /></td>
            </tr>
          </table>
        </form></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>