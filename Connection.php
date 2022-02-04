<?php

namespace Kino;
class Connection{  

    public function connect(){
        $user = "root";
        $pass = "root";
        $db = "logowanie01";
        $server = "localhost";
        $port = 8889;
        
        $conn = mysqli_connect($server, $user, $pass, $db,$port );
        if(!$conn){
            die("<script>alert('Nie udalo sie polaczyc z baza danych')</script>");
         }
        return $conn;
    }
    
}
