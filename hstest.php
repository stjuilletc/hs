<?php
include 'unirest-php-master/unirest-php-master/src/Unirest.php';
Unirest\Request::verifyPeer( false );
$cardName = 'deathwing';
$oResponse = Unirest\Request::get(
    //Url
    sprintf(
        'https://omgvamp-hearthstone-v1.p.mashape.com/cards?attack=1',
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
        echo ( '<pre>' . print_r( $oResponse, true ) . '</pre>' );
	  $array = json_decode(json_encode($oResponse), True);
	  for ($i = 0; $i < 10; $i++) {
	  print("<h1>".$array['body']['Blackrock Mountain'][$i]['name']."</h1>");
	  }
    }
}