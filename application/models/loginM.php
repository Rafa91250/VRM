<?php

class loginM extends CI_Model {
    /*Affiche toute les associations*/
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function connexion($mail, $pass){

        //verif mail et pass xss_clean
        $req = "SELECT IdU,EmailU,PasswordU FROM user WHERE EmailU = '".$mail."'";
        $query = $this->db->query($req);
        $row = $query->row();

        return $rpw;
    }

}