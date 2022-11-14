<?php

    function connection(){
        //CONNECT TO MYSQL DATABASE USING MYSQLI
        $link = mysqli_connect('', '', '', '');

        // Check connection
        if(!$link){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        return $link;
    }
?>