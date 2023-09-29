<?php

require_once ('UserDTO.php');
//DTO
class uttilisateurDAO
{

    public function getUser($id)
    {
        $where = "WHERE id =".$id;
        $result = bdd::getInstance()->query("SELECT * FROM users ".$where) ;
        return new UserDTO($result->fetchAll());
    }

    public function addUser($pseudo, $email, $password, $anniversaire)
    {
            bdd::getInstance()->query("INSERT INTO users ( pseudo, email, password, birthday, avatar, jeton, paiementRef, parentalControl) values ('$pseudo', '$email', '$password', '$anniversaire', 'avatar', 0, 0, 0),");
            return true;
    }

    public function deleteUser($id)
    {
        bdd::getInstance()->query("DELETE FROM users WHERE id = ".$id);
        return true;
    }

    public function updateUser($id, $fields)
    {

        $sql = "UPDATE users SET ";
        $updates = array();
        foreach ($fields as $key => $value) {
            $updates[] = "$key = '$value'";
        }
        $sql .= implode(", ", $updates);
        $sql .= " WHERE id = ".$id;
        echo $sql;
        bdd::getInstance()->query($sql);
        return true;

    }


}