<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Nazuchi Gallery</title>
<style type="text/css">
*{margin:0;padding:0;}
body
{
	background:#000;
}
img
{
	width:auto;
	box-shadow:0px 0px 20px teal;
	-moz-transform: scale(0.7);
	-moz-transition-duration: 0.6s;	
	-webkit-transition-duration: 0.6s;
	-webkit-transform: scale(0.7);
	
	-ms-transform: scale(0.7);
	-ms-transition-duration: 0.6s;	
}
img:hover
{
	 box-shadow: 20px 20px 20px blue;
	-moz-transform: scale(0.8);
	-moz-transition-duration: 0.6s;
	-webkit-transition-duration: 0.6s;
	-webkit-transform: scale(0.8);
	
	-ms-transform: scale(0.8);
	-ms-transition-duration: 0.6s;
	
}
#header
{
	width:100%;
	height:50px;
	background: teal;
	font-family:"Lucida Handwriting";
	font-family: castellar;
	text-align:center;
	font-size:35px;
	font-weight:bolder;
	color: #000;
}
#body
{
	margin:0 auto;
	text-align:center;
}
#isi {
	margin: -12px;
}
#isi>a {
	width: 1800px;
	
}
</style>
</head>
<body>
	<div id="isi">
		<a href="nazuchi.com">
			<img src="ico/header.jpg">
		</a>
	</div>
	
<div id="body">
<?php
$folder_path = 'images/'; //image's folder path

$num_files = glob($folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);

$folder = opendir($folder_path);
 
if($num_files > 0)
{
	while(false !== ($file = readdir($folder))) 
	{
		$file_path = $folder_path.$file;
		$extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
		if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'bmp') 
		{
			?>
            <a href="<?php echo $file_path; ?>"><img src="<?php echo $file_path; ?>"  height="250" /></a>
            <?php
		}
	}
}
else
{
	echo "the folder was empty !";
}
closedir($folder);
?>

</div>
</body>
</html>