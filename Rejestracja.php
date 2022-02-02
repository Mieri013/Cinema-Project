<?php

namespace Kino;

include_once("Connection.php");



class Rejestracja{
        public function czyIstniejeEmail($email){
            $class = new Connection();
            $connect=$class->connect();
            
            $sql = "SELECT * FROM uzytkownicy WHERE e-mail LIKE '$email'";
            $result = mysqli_query($connect, $sql);
            
            if ($result->num_rows > 0){
                return true;
            }
            else {
                return false;
            }
        }

        public function validEmail($email){
            return filter_var($email, FILTER_VALIDATE_EMAIL);
        }

        public function min4Znaki($password){
            if (strlen($password) >= '4') 
                return true;
            else return false;
        }

        public function maWielkieLitery($password){
            if (preg_match("#[A-Z]+#",$password)) 
                return true;
            else return false;
        }

        public function maMaleLitery($password){
            if (preg_match("#[a-z]+#",$password)) 
                return true;
            else return false;
        }

        public function validPassword($password){
            $rejestracja = new Rejestracja;
            if ($rejestracja->min4Znaki($password) && $rejestracja->maMaleLitery($password) && $rejestracja->maWielkieLitery($password) && !empty($password))
                return true;
                
            else return false;
        }

       
} 