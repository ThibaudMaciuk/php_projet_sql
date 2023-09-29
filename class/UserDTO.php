<?php
require_once ('uttilisateurDAO.php');
class UserDTO
{

    private $id;
    private $email;
    private $pseudo;
    private $password;
    private $avatar;
    private $birthday;
    private $paiementRef;
    private $parentalControl;
    private $jetons;

    function __construct($result = null)
    {
        $this->id = $result['id'];
        $this->email = $result['email'];
        $this->pseudo = $result['pseudo'];
        $this->password = $result['password'];
        $this->avatar = $result['avatar'];
        $this->birthday = $result['birthday'];
        $this->paiementRef = $result['paiementRef'];
        $this->parentalControl = $result['parentalControl'];
        $this->jetons = $result['jetons'];
    }

    public function getUser($id)
    {
        echo $this->paiementRef;
    }

}