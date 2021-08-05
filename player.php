<html lang="en">
 <head>
  <meta charset=utf-8/>

<!--<php //$lecoollink='https://temple.void.yt:4443/nothing.m3u8'; >-->
<?php 

$url = "https://";
$url.= $_SERVER['HTTP_HOST'];
 // Append the PORT
$url.= ":4443/";


$url.=$_GET["megacoollink"];  ?>
<!--pass the php variable that contains the FULL https://link:4443/stream.m3u8 to the javascript below to be played in the hls browser script:-->
<script> coollink = "<?php echo $url; ?>";</script>



 </head>
<body style="background-color:black">

	<style>
		video {
			margin: 0 auto;
		}
	</style>
	<video id="video" width="100%"  height="100%" controls autoplay="true"  class="videoCentered"></video>
	<script src="https://cdn.jsdelivr.net/hls.js/latest/hls.js"></script>



	<script>
		  if(Hls.isSupported()) {
			      var video = document.getElementById('video');
			      var  hls = new Hls({ autoStartLoad:true }); // false
			      hls.loadSource(coollink);
			      hls.attachMedia(video);
			  	hls.startLoad(1);
			      hls.on(Hls.Events.MANIFEST_PARSED,function() {
				      	  hls.startLoad(20);
				            video.play();
				        });
			   }
	</script>
</body>
</html>
