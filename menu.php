﻿<?php 
//session_start();
//parseo de FECHA....
$a=date('y-m-d');
$ar = split('[-:]',$a);
$fecha= $ar[2].'/'.$ar[1].'/'.$ar[0];
//parseo de FECHA..
//echo  $_SESSION["usuario"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema Conceptual | UNPA UARG</title>
<style type="text/css">
<!--
.Estilo1 {
	color: #E51E25;
	font-weight: bold;
	font-size: 12px;
}
.AplicantesExplicacion {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 10px;
}
.ref {
	font-family: Verdana, Geneva, sans-serif;
}
.ref {
	font-size: 12px;
	color: #FFF;
}
.ref {
	font-weight: bold;
}
a {
	text-align: center;
}
.blanco {
	color: #FFF;
}
p {
	text-align: center;
}
.centro {
	text-align: center;
}
-->
</style>
</head>

<body>
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><p>ABM DOCUMENTO</p>
    <p>&nbsp;</p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="808" height="72" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
  
  <tr>
    <td height="37" colspan="7" align="center" valign="middle" bgcolor="#E51E25"><table width="800" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="412" align="left" valign="middle" class="ref"><?php echo $fecha ?> <span class="Estilo1">__</span> ©  2013</td>
        <td width="406" align="right" valign="middle" class="ref">UNIVERSiDAD NACIONAL DE LA PATAGONIA AUSTRAL  UARG -UASJ</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="24" colspan="7" align="center" valign="middle" class="AplicantesExplicacion"><span class="AplicantesExplicacion">desarollado por :xxxxxx</span></td>
  </tr>
</table>
</body>
</html>