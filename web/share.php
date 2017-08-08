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
