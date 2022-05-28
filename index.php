<?php
session_start();
include_once "library/inc.connection.php";
include_once "library/inc.library.php";
?>
<html>
<head>
<title>Dairi Bertani</title>
<meta name="robots" content="index, follow">

<meta name="description" content=>

<meta name="keywords" content="dairi bertani, dairi, dan lainnya">

<link href="style/styles_user.css" rel="stylesheet" type="text/css">
<link href="style/button.css" rel="stylesheet" type="text/css">
<script language="JavaScript" src="js.popupWindow.js"></script>
<style type="text/css">
<!--
.style2 {font-family: "Courier New", Courier, monospace}
.style4 {font-family: "Courier New", Courier, monospace; font-size: 9px; }
.style5 {font-size: 10px}
-->
</style>
</head>
<body>
<table width="800" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr>
    <td colspan="2" bgcolor="#F5F5F5">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><img src="images/header.jpg" width="800" height="178"></td>
  </tr>
  <tr>
    <td colspan="2" align="right"><a href="?open=Home" target="_self"><strong>HOME</strong></a> | <a href="?open=Profil" target="_self"><strong>INFORMASI</strong></a> | <a href="?open=Barang" target="_self"><strong>KOLEKSI</strong></a> | <a href="?open=Panduan" target="_self"><strong>PANDUAN</strong></a> | <a href="?open=Konfirmasi" target="_self"><strong>KONFIRMASI</strong></a> </td>
  </tr>
  <tr>
    <td colspan="2" align="right" bgcolor="#CCCCCC"><form name="form1" method="post" action="?open=Barang-Pencarian">
      <strong>Cari Barang :</strong> 
      <input name="txtKeyword" type="text" size="30" maxlength="100">
        <input type="submit" name="btnCari" value=" Cari ">
    </form>    </td>
  </tr>
  <tr>
    <td width="182" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr>
          <td bgcolor="#CCCCCC"><strong>KONTAK MAIL </strong></td>
        </tr>
        <tr>
          <td><a href="ymsgr:sendIM?kutubuku@yahoo.com"><span class="style4">&nbsp;<img src="images/mail.png" width="19" height="17" border="0" /><span class="style5">dairibertani@gmail.com</span></span></a></td>
        </tr>
        <tr>
          <td bgcolor="#CCCCCC"><strong>TELEPON</strong></td>
        </tr>
        <tr>
          <td><span class="style2"><img src="images/WhatsApp-Logo.png" width="33" height="30" />0812345678910</span></td>
        </tr>
        <tr>
          <td><?php if(file_exists ("login.php")) { include "login.php"; }  else { echo "file login.php belum ada"; } ?> </td>
        </tr>
        <tr>
          <td bgcolor="#CCCCCC">&nbsp;</td>
        </tr>
         <?php
		  $mySql = "SELECT * FROM kategori ORDER BY nm_kategori";
		  $myQry = mysql_query($mySql, $koneksidb) or die ("Query salah : ".mysql_error());
		  while($myData = mysql_fetch_array($myQry)) {
		      $Kode = $myData['kd_kategori'];
		  ?>
        <tr>
          <td>&nbsp;</td>
        </tr>
		<?php } ?>
    </table>
	</td>
    <td width="603" valign="top" bgcolor="#FFFFFF"><?php include "buka_file.php"; ?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center" bgcolor="#F5F5F5"><div align="center"><span class="FOOT">Dairi Bertani </span></div></td>
  </tr>
</table>
</body>
</html>
