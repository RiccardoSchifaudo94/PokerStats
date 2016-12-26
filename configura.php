<?php

//echo "Benvenuto nel file di configura.php";

function connetti(){

$server = "localhost";
$password = "piknugisma42";
$user = "pokerstats";
$db = "my_pokerstats";


$con = mysqli_connect("$server","$user","$password","$db") 
or die ("connessione non riuscita al db!".$sql.mysqli_error()) ;

return $con;


}

function esegui_query($con,$query){

    $risultato = mysqli_query($con,$query)
    or die ("errore nella query" . $query. mysql_error());

    return $risultato;

}

function esegui_query_stringa($con,$query){

    $risultato = mysqli_query($con,$query)
    or die ("errore nella query" . $query. mysql_error());

    $stringa_riga = mysqli_fetch_assoc($risultato);


    return $stringa_riga;

}

function calcola_righe_query($con,$query){

    $risultato = mysqli_query($con,$query)
    or die ("errore nella query" . $query. mysql_error());

    $numero_righe =mysqli_num_rows($risultato);


    return $numero_righe;

}

function filtraInput($con,$stringa){
  
      //$stringa2 = htmlspecialchars($stringa);
      mysqli_real_escape_string($con,$stringa);
      return $stringa;
}

function filtraOutput($stringa){

      return htmlspecialchars($stringa);
      //return utf8_decode($stringa);

}


function pulisci($str) {
 // if (get_magic_quotes_gpc()) $str = stripslashes($str);
  return mysql_real_escape_string($str);
}

function convertiTimeStampInData($timeStampDaConvertire){

                $timestamp=strtotime($timeStampDaConvertire);
                $data = date("d-M-Y",$timestamp);
                $orario = date("H:i:s",$timestamp);
                echo $data." ".$orario." ";

}


function limitaStringa50($stringa) {

$stringa2 = substr($stringa,0,50);
return $stringa2;

}

function limitaStringa25($stringa) {

$stringa2 = substr($stringa,0,25);
return $stringa2;

}


function sconnetti($con){
    return mysqli_close($con);
}

?>