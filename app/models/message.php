<?php /** @noinspection SqlNoDataSourceInspection */

Class Message{

    //fonction permettant de stocker un message en base de donnée
    function send($POST)
    {
        $DB = new Database();

        $_SESSION['error'] = "";
        if(isset($POST['nom']) && isset($POST['email']) && isset($POST['sujet']) && isset($POST['message']))
        {
            $arr['nom'] = $POST['nom'];
            $arr['email'] = $POST['email'];
            $arr['sujet'] = $POST['sujet'];
            $arr['message'] = $POST['message'];
            $arr['date'] = date("Y-m-d H:i:s");

            $query = "insert into messages (nom,email,sujet,message,date) values (:nom,:email,:sujet,:message,:date)";
            $data = $DB->write($query,$arr);
            if($data)
            {
                header("Location:". ROOT . "home");
                die;
            }

        }else{
            $_SESSION['error'] = "Veuillez remplir tous les champs";
        }
    }
}
