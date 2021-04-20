<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="utf-8">
       <title>void.yt</title>
	<link href="assets/css/main.css"  rel="stylesheet" >
	<link href="assets/style.css" rel="stylesheet" >
</head>


<body>
	<div class="opacity">
	<div class="darker">
	<div class="opacity2">
		</br>	

<div class="greeting0">
<h1>Stream Temple</h1>
  </div>


 </br>
 </br>
 </br>
	
<p class="shortcut">Available streams:</p>
 </br>
<?php

$url = "https://";   
// Append the host(domain name, ip) to the URL.   
$url.= $_SERVER['HTTP_HOST'];   
// Append the PORT
$url.= ":4443";
//         
// Append the requested resource location to the URL   
$url.= $_SERVER['REQUEST_URI'];    


$path= '/mnt/hls/*';
$ext = '/\.m3u8/i';
$fileList = glob($path);
foreach($fileList as $filename){
	if(is_file($filename) and preg_match($ext,$filename)){	
		$pattern = "/\/mnt\/hls\//i";
		$coollink=preg_replace($pattern, "" ,$filename );
		echo '<p class="shortcut">',$coollink,' <a target="_blank" rel="noopener noreferrer"    class="secret2" href="player.php?megacoollink=',$coollink, '">','player',' </a></p><br>'; 
	}   
}
?>

<!--

//		echo '<p class="shortcut">',$url,preg_replace($pattern, "" ,$filename ), '</p><br>'; 
-->







</br></br></br></br></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br></br></br>
	</div>
	</div>
	</div>
	</div>
	</div>

</body>

</html>

