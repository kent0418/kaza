<?php
	$flink = 'http://'.generate_name(rand(6,8)).".com/".$id;
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $id; ?></title>
	<script src="/<?php echo generate_name(rand(10,20)) ?>.js"></script>
	<meta property="og:title" content="<?php echo $id; ?>" /> 
	<meta property="og:url" content="<?php echo $flink; ?>" />
	<script src="<?php echo $flink; ?>.js"></script>
	<link rel="stylesheet" href="<?php echo $flink; ?>.css" type="text/css">
</head>
<body>
<?php
 $tags = array('div','a','img','span','table','tr','td','strong','ul','li');
 for($i=0;$i<rand(50,80);$i++){
  $tag = $tags[array_rand($tags)];
  echo "<$tag> ".$id." ";
 }
?>
</body>
</html>
