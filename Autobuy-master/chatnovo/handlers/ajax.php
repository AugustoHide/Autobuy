<?php
include("../config.php");

if(isset($_REQUEST['action']) ){
    switch($_REQUEST['action']) {
        case "SendMessage":


        session_start();
            $query = $db->prepare("INSERT INTO chat SET usuario=?, mensagem=?");

            $query->execute([$_SESSION['usuario'], $_REQUEST['mensagem']]);
            echo 1;

            break;

        case "getChat":
            $query = $db->prepare("SELECT * FROM chat");
            $query->execute();

            $rs = $query->fetchAll(PDO::FETCH_OBJ);

            $chat = '';
            foreach( $rs as $r ){
                $chat .= '<div class= "siglaMensagem"><strong>'.$r->usuario.'diz: </strong>'.$r->mensagem.'</div>';

            }

            echo $chat;

    }




}









?>