<?php
error_reporting(0);
$name= $_GET['nama'];
download($name);

function download($name){
$file = $name;
if($file){
	echo 'file will download in a while downloading.........<a href="download.php? nama='.$file.'">click to refresh</a>';
if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($file);
    exit;
}
}
}
?>