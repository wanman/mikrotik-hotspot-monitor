<?php
/*
 *  Copyright (C) 2017, 2018 Laksamadi Guko.
 *
 *  This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
session_start();
?>
<?php
error_reporting(0);
require('../lib/api.php');
include('../config.php');

if(!isset($_SESSION['usermikhmon'])){
	header("Location:../login.php");
}
$id = $_GET['id'];
if($id == ""){
include('./vouchers.php');
}else{
  $detv = explode('-', $id);
  for ($i=0;$i<count($detv);$i++) {
  $vkkv=$id;
  $vserver=$detv[1];
  $vprofname=$detv[2];
  $uptimelimit=$detv[3];
  $upbytelimit=$detv[4];
  $vprice=$detv[5];
  }
}

include('../css/vcolors.php');
$API = new RouterosAPI();
$API->debug = false;
if ($API->connect( $iphost, $userhost, $passwdhost )) {
	$API->write('/ip/hotspot/user/print', false);
	$API->write('?=comment='.$vkkv.'');
	$ARRAY = $API->read();
	$API->disconnect();
}
$TotalReg = count($ARRAY);

$tlimit = $uptimelimit;
if ($tlimit == $utimelimit1){
	$vtimelimit = "Durasi:$utimelimit1t";
}elseif ($tlimit == $utimelimit2){
	$vtimelimit = "Durasi:$utimelimit2t";
}elseif ($tlimit == $utimelimit3){
	$vtimelimit = "Durasi:$utimelimit3t";
}elseif ($tlimit == $utimelimit4){
	$vtimelimit = "Durasi:$utimelimit4t";
}elseif ($tlimit == $utimelimit5){
	$vtimelimit = "Durasi:$utimelimit5t";
}elseif ($tlimit == $utimelimit6){
	$vtimelimit = "Durasi:$utimelimit6t";
}elseif ($tlimit == $utimelimit7){
	$vtimelimit = "Durasi:$utimelimit7t";
}elseif ($tlimit == $utimelimit8){
	$vtimelimit = "Durasi:$utimelimit8t";
}elseif ($tlimit == $utimelimit9){
	$vtimelimit = "Durasi:$utimelimit9t";
}elseif ($tlimit == $utimelimit10){
	$vtimelimit = "Durasi:$utimelimit10t";
}else {
	$vtimelimit= "";
}
$blimit = $upbytelimit;
if ($blimit == $ubytelimit1){
	$vbytelimit = "Kuota:$ubytelimit1t";
}elseif ($blimit == $ubytelimit2){
	$vbytelimit = "Kuota:$ubytelimit2t";
}elseif ($blimit == $ubytelimit3){
	$vbytelimit = "Kuota:$ubytelimit3t";
}elseif ($blimit == $ubytelimit4){
	$vbytelimit = "Kuota:$ubytelimit4t";
}elseif ($blimit == $ubytelimit5){
	$vbytelimit = "Kuota:$ubytelimit5t";
}elseif ($blimit == $ubytelimit6){
	$vbytelimit = "Kuota:$ubytelimit6t";
}elseif ($blimit == $ubytelimit7){
	$vbytelimit = "Kuota:$ubytelimit7t";
}elseif ($blimit == $ubytelimit8){
	$vbytelimit = "Kuota:$ubytelimit8t";
}elseif ($blimit == $ubytelimit9){
	$vbytelimit = "Kuota:$ubytelimit9t";
}elseif ($blimit == $ubytelimit10){
	$vbytelimit = "Kuota:$ubytelimit10t";
}else {
	$vbytelimit= "";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Mikrotik Hotspot Monitor</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="pragma" content="no-cache" />
		<link rel="icon" href="../img/favicon.png" />
		<style>
@font-face {
  font-family: Roboto;
  src: url('../css/fonts/Roboto-Regular.woff');
  font-weight: normal;
  font-style: normal;
}
body {
  color: #000000;
  background-color: #FFFFFF;
  font-size: 14px;
  font-family: Roboto;
}
table.tprint {
  margin-left:auto;
  margin-right:auto;
  width: 300px;
  height: 180px;
  border-collapse: collapse;
  page-break-inside:auto;
}
table.tprint tr {
  page-break-inside:avoid;
  page-break-after:auto;
}
table.tprint td {
  padding: 10px;
  border: 1px solid #000000;
  font-size: 14px;
  text-align: left;
}
table.tprinta {
  margin-left:auto;
  margin-right:auto;
  width: 300px;
  height: 180px;
  border-collapse: collapse;
}
table.tprinta td {
  padding: 2px 4px;
  border: 2px solid #000000;
  font-size: 16px;
  text-align: left;
  font-weight: bold;
}
table.tprintb {
  table-layout:fixed;
  margin-left:auto;
  margin-right:auto;
  width: 300px;
  border-collapse: collapse;
}
table.tprintb td {
  padding-top: 1px;
  padding-left: 30px;
  border: 0px;
  font-size: 18px;
  text-align: left;
}
div{
  padding:2px;
  border: 1px solid #000000;
  border-radius:5px;
}
		</style>
	</head>
	<body>

<table class="tprint">
	<?php $jml = $TotalReg / 3; for($bar=0;$bar<$jml;$bar++){ if($bar==0) $indx = 0; else $indx = 3 * $bar;?>
			<tr> <!--baris 1 -->
					<?php for($kol=0;$kol<3;$kol++){ ?>
				<td>
					<table class="tprinta">
						<tr>
							<td style="text-align: left; background-color:<?php print_r($header);?>"><img src="../img/logo.png" alt="logo" style="height:43px;border:0;"></td>
							<td style="text-align: right; color:<?php print_r($font1);?>; background-color:<?php print_r($header);?>"><?php print_r($headerv); $no = $indx+1; echo "  [$no]";?></td>
						</tr>
						<tr>
							<td colspan=2 style="font-size: 12px; color:<?php print_r($font2);?>; background-color:<?php print_r($note);?>">Login dan Logout buka http://<?php print_r($notev);?> </td>
						</tr>
						<tr>
							<td colspan=2 style="color:<?php print_r($font3);?>; background-color:<?php print_r($userpass);?>">
								<table class="tprintb">
									<tr><td style="font-size: 12px;">Username :<br><div style="font-size: 18px;"><?php $regtable = $ARRAY[$indx];echo "" . $regtable['name'];?></div></td>
									<td rowspan=2 style="text-align:right;">
										<?php
										$regtable = $ARRAY[$indx]; $uname = $regtable['name']; $upass = $regtable['password'];
										// Source: http://stackoverflow.com/questions/5943368/dynamically-generating-a-qr-code-with-php
										// Google Charts Documentation: https://developers.google.com/chart/infographics/docs/qr_codes?csw=1#overview
										// CHart Type
										$cht = "qr";
										// CHart Size
										$chs = "80x80";
										// CHart Link
										// the url-encoded string you want to change into a QR code
										$chl = urlencode("http://$notev/login?username=$uname&password=$upass");
										// CHart Output Encoding (optional)
										// default: UTF-8
										$choe = "UTF-8";
										$qrcode = 'https://chart.googleapis.com/chart?cht=' . $cht . '&chs=' . $chs . '&chld=L|0&chl=' . $chl . '&choe=' . $choe;
										//echo $qrcode . '<br>';
										?>
											<img src="<?php echo $qrcode ?>" alt="vcrqrcode">
										</td>
									<tr><td style="font-size: 12px;">Password :<br><div style="font-size: 18px;"><?php $regtable = $ARRAY[$indx];echo "" . $regtable['password'];?></div>
									</td>
									
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td colspan=2 style="text-align: center; color:<?php print_r($font4);?>; background-color:<?php print_r($details);?>">Aktif:<?php print_r($vprofname);?> <?php print_r($vtimelimit);?> <?php print_r($vbytelimit);?></td>
						</tr>
						<tr>
							<td colspan=2 style="text-align: center; color:<?php print_r($font5);?>; background-color:<?php print_r($price);?>"><?php print_r($vserver);?> <?php print_r($vprice);?></td>
						</tr>
					</table>
				</td>
					<?php $indx++; } ?>
			</tr>
	<?php } ?>
</table>
</body>
</html>
