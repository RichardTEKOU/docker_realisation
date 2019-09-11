<?php
//récupération des données simple
echo $_POST['titre'].'
';
echo $_POST['nom'].'
';
//récupération des cases à coché
if(isset($_POST['musique']))// si la case musique est cochée, c'est que le formulaire a envoyé quelque chose
{
  echo $_POST['musique'];
}
else
{
  echo "Musique non coché";
}
