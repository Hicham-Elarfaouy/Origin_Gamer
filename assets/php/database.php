<?php

function connection(){
    $link = mysqli_connect('', '', '', '');

    if(!$link){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    return $link;
}