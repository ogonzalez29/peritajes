<?php
//Verify if session started, else redirect to login.php
if(!isset($_SESSION)) { 
    session_start(); 
} 
if (!$_SESSION['logged']) {
	header("Location: login.php");
	exit;
}
//Connect to the database
include ('info.php');
// include ('print_cc.php');

//Include the autoloader
require '../phpwkhtmltopdf/vendor/autoload.php';
//webserver
// require '../../../phpwkhtmltopdf/vendor/autoload.php';

use mikehaertl\wkhtmlto\Pdf;

// You can pass a filename, a HTML string, an URL or an options array to the constructor
$pdf = new Pdf(array(
	'page-size' => 'Letter',
	'margin-top'    => 10,
    'margin-right'  => 0,
    'margin-bottom' => 10,
    'margin-left'   => 0,
	));

$pdf->addPage('localhost/peritajes/printp.html');
//webserver
// $pdf->addPage('/home/servital/public_html/peritajes/printp.html');

// On some systems you may have to set the path to the wkhtmltopdf executable
$pdf->binary = 'C:\Program Files\wkhtmltopdf\bin\wkhtmltopdf.exe';
//webserver
// $pdf->binary = '/home/servital/wkhtmltox/bin/wkhtmltopdf';

@$search2 = $_SESSION['cons2'];
@$doc3 = $_POST['doc3'];

//get last results from database if recently submitted
$result2 = mysql_query("SELECT * FROM document2 ORDER BY id DESC LIMIT 1")
	or die(mysql_error());

if (!empty($search2)) {
	$result2 = mysql_query("SELECT * FROM document2 WHERE id = '$doc3'")
		or die(mysql_error());

	//If there's no information in database from search query
	if (mysql_num_rows($result2) == 0) {
		die('No hay información con ese criterio de búsqueda');
	}
}	

//loop through results of database query, displaying them in the format
while ($row2 = mysql_fetch_array($result2)) {

	$doc3 = $row2['id']+2000;
	$license = $row2['license'];
	$day = $row2['day'];
	$month = $row2['month'];
	$year = $row2['year']-2000;

	if (!$pdf->send($doc3.'_'.$license.'_'.$day.$month.$year.'.pdf')) {
	    echo $pdf->getError();
	}

		$pdf->saveAs('C:/Temp/'.$doc3.'_'.$license.'_'.$day.$month.$year.'.pdf');
}
?>