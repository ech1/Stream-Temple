<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="utf-8">
       <title>Temple</title>
	<link href="assets/css/main.css"  rel="stylesheet" >
	<link href="assets/style.css" rel="stylesheet" >
	<link rel="icon" type="image/png" href="temple.png">
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="temple.png">

    <meta property="og:image" content="temple.png" />
    <meta name="theme-color" content="#492832">


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
	
<a href="https://github.com/ech1/Stream-Temple"><img src="temple.png" style="width:200px"></a>  </br>

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
		$urlfull =$url; 
		$urlfull.= $coollink;
		
			
		echo '<p class="shortcut">',$urlfull,' <a target="_blank" rel="noopener noreferrer"    class="secret2" href="player.php?megacoollink=',$coollink, '">','[player]</p><br>'; 
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

