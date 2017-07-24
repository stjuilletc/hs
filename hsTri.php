<!DOCTYPE HTML>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <link rel="stylesheet" type="text/css" href="style.css">
      <script src="script.js" type="text/javascript"></script>  
      <meta charset="utf-8">
      <title>Titre</title>
   </head>

	<body>
		<form method="POST">
			<table>
			<tr>
				<td>Attack</td>
				<td><input type="text" name="attack" size="70" maxlength="70" /></td>
			</tr>
			<tr>
				<td>Health</td>
				<td><input type="text" name="health" size="70" maxlength="70" /></td>
			</tr>
			<tr>
				<td>Cost</td>
				<td><input type="text" name="cost" size="70" maxlength="70" /></td>
			</tr>
			</table>
		
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="Recherche" /></td>
			</tr>
		
		</form>
<?php
if(isset($_POST['submit'])){
	$s="";
	if(isset($_POST["attack"])and $_POST['attack']!="")
		$s.="&attack=".$_POST["attack"];
	if(isset($_POST["health"])and $_POST['health']!="")
		$s.="&health=".$_POST["health"];
	if(isset($_POST["cost"])and $_POST['cost']!="")
		$s.="&cost=".$_POST["cost"];
	include 'unirest-php-master/unirest-php-master/src/Unirest.php';
	Unirest\Request::verifyPeer( false );
	$cardName = 'deathwing';
	$oResponse = Unirest\Request::get(
		//Url
		sprintf(
			'https://omgvamp-hearthstone-v1.p.mashape.com/cards?locale=frFR'.$s,
			$cardName
		),
		//Entête
		array(
			'X-Mashape-Key' => '9PEnuHY4ARmshO5LOSj6zT6h5Hb3p17YLJ2jsnEQfKLuTh9ZsV'
		)
	);
	/*
	On vérifie que $oResponse est bien une instance de Unirest\Response
	Remarque: Cette ligne n'est probablement pas utile, il semble que sa est évoluer vers les exceptions.
	Donc prévoir try catch lors de l'appel à la méthode static get de Unirest\Request
	*/
	if ( $oResponse instanceof Unirest\Response )
	{
		 
		if ( $oResponse -> code == 200 )
		{
			//La requête c'est bien passé
			//echo ( '<pre>' . print_r( $oResponse, true ) . '</pre>' );
		  $array = json_decode(json_encode($oResponse), True);
		  print("<ul> Basic");
		  for ($i = 0; $i < count($array['body']['Basic']); $i++) {
			print("<li>".$array['body']['Basic'][$i]['name']."</li>");
		  }
		  print("</ul>");
		  
		  
		  print("<ul> Classic");
		  for ($i = 0; $i < count($array['body']['Classic']); $i++) {
			print("<li>".$array['body']['Classic'][$i]['name']."</li>");
		  }
		  print("</ul>");
		  
		  print("<ul> Promo");
		  for ($i = 0; $i < count($array['body']['Promo']); $i++) {
			print("<li>".$array['body']['Promo'][$i]['name']."</li>");
		  }
		  print("</ul>");
		  
		  print("<ul> Hall of Fame");
		  for ($i = 0; $i < count($array['body']['Hall of Fame']); $i++) {
			print("<li>".$array['body']['Hall of Fame'][$i]['name']."</li>");
		  }
		  print("</ul>");
		  
		  print("<ul> Goblins vs Gnomes");
		  for ($i = 0; $i < count($array['body']['Goblins vs Gnomes']); $i++) {
			print("<li>".$array['body']['Goblins vs Gnomes'][$i]['name']."</li>");
		  }
		  print("</ul>");
		  
		  print("<ul> Blackrock Mountain");
		  for ($i = 0; $i < count($array['body']['Blackrock Mountain']); $i++) {
			print("<li>".$array['body']['Blackrock Mountain'][$i]['name']."</li>");
		  }
		  print("</ul>");
		  
		  print("<ul> The Grand Tournament");
		  for ($i = 0; $i < count($array['body']['The Grand Tournament']); $i++) {
			print("<li>".$array['body']['The Grand Tournament'][$i]['name']."</li>");
		  }
		  print("</ul>");
		  
		  print("<ul>The League of Explorers");
		  for ($i = 0; $i < count($array['body']['The League of Explorers']); $i++) {
			print("<li>".$array['body']['The League of Explorers'][$i]['name']."</li>");
		  }
		  print("</ul>");
		  
		  print("<ul>Whispers of the Old Gods");
		  for ($i = 0; $i < count($array['body']['Whispers of the Old Gods']); $i++) {
			print("<li>".$array['body']['Whispers of the Old Gods'][$i]['name']."</li>");
		  }
		  print("</ul>");
		  
		  print("<ul>One Night in Karazhan");
		  for ($i = 0; $i < count($array['body']['One Night in Karazhan']); $i++) {
			print("<li>".$array['body']['One Night in Karazhan'][$i]['name']."</li>");
		  }
		  print("</ul>");
		  
		  print("<ul>Mean Streets of Gadgetzan");
		  for ($i = 0; $i < count($array['body']['Mean Streets of Gadgetzan']); $i++) {
			print("<li>".$array['body']['Mean Streets of Gadgetzan'][$i]['name']."</li>");
		  }
		  print("</ul>");
		  
		  print("<ul>Journey to Un'Goro");
		  for ($i = 0; $i < count($array['body']["Journey to Un'Goro"]); $i++) {
			print("<li>".$array['body']["Journey to Un'Goro"][$i]['name']."</li>");
		  }
		  print("</ul>");
		  
		  
		}
	} 
}?>

	</body>	
	</html>
