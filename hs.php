<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Summoner Info</title>
</head>
<body>
	<h1>Summoner Info</h1>
<?php
	require 'vendor/autoload.php';
	$result = Unirest\Request::get("https://omgvamp-hearthstone-v1.p.mashape.com/cards",
  array(
    "X-Mashape-Key" => "kKdUp8Em9wmshJ1VbKvjI6roQ0ozp1QQQGxjsnmilftLrevv9s"
  )
);

?>	

	<div>
		<?php $f = $result->fetch();
		echo f['cardID']; ?>
	</div>
 

</body>
</html>