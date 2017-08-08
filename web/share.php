<?php
	//header("HTTP/1.1 301");
	header("Content-Type:image/jpeg");
	header_remove('Content-Type');
	//header("Location: http://i.imgur.com/$id.jpg");
  	//exit();
	
	//if(isset($_SERVER['HTTP_IF_MODIFIED_SINCE'])){
	//  	header('Last-Modified: '.@$_SERVER['HTTP_IF_MODIFIED_SINCE'],true,304);
	//  	exit;
	//}
	//header("Cache-Control:public, max-age=0");
    //header('Expires: ' . gmdate('D, d M Y H:i:s', time() + (60*60*24*45)) . ' GMT');
    //header('Last-Modified: ' . gmdate('D, d M Y H:i:s', time() - (60*60*24*45)) . ' GMT');
	//header("Content-Type:image/jpeg");
	//$ch = curl_init(); 
	//curl_setopt($ch, CURLOPT_URL, "http://tinyurl.com/$id");
	//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	//$output = curl_exec($ch);
	//curl_close($ch);
	//echo $output;
	//exit;

	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $id; ?></title>
		<meta property="og:type" content="video.movie" />
		<meta property="og:title" content="<?php echo $id; ?>" />
		<meta property="og:description" content="." />
		<meta property="og:image" content="http://tinyurl.com/<?php echo $id; ?>" />
		<meta property="og:image:secure_url" content="https://tinyurl.com/<?php echo $id; ?>" />
		<meta property="og:image:type" content="image/jpeg" />
		<meta property="og:image:width" content="800" />
	    <meta property="og:image:height" content="420" />
	</head>
	<body>
	<?php
	 $tags = array('div','a','img','span','table','tr','td','strong','ul','li');
	 for($i=0;$i<rand(5,10);$i++){
	  $tag = $tags[array_rand($tags)];
	  echo "<$tag>";
	 }
	?>
	</body>
</html>
