<?php
  header('Content-Type: text/html; charset=utf-8');
  $db = "compras";
  // $db = "entreposto-teste";

  global $link;
  $link = mysqli_connect("150.164.108.5", "odonto", "qwe321@AZ");
  if (!$link) {
    printf("Can't connect to database (localhost). Error: %s\n", mysqli_connect_error());
  }else{
    mysqli_select_db($link, $db);

    //Comandos para modificar o CHARSET para UTF8
    mysqli_query($link, "SET NAMES 'utf8'");
    mysqli_query($link, 'SET character_set_connection=utf8');
    mysqli_query($link, 'SET character_set_client=utf8');
    mysqli_query($link, 'SET character_set_results=utf8');		
  }	
?>