<?php

require_once ('class/bdd.php');
require_once('class/uttilisateurDAO.php');

$bdd = new UserDTO();


//$bdd->addUsers('pseudoAdmin', 'test&admin.fr', 'password', "2000-08-18");

$bdd->getUser(3);


/*$custom = array(
    "pseudo" => "newpseudo",
    "email" => "nouveauemail.com",
);

if ($bdd->updateUsers(4, $custom))
{
    echo "bien";
}
else
{
    echo "pas bien";
}*/

//$bdd->update(2);