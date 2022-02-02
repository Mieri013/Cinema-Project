<?php



class rejestracjaTest extends \PHPUnit\Framework\TestCase{

    public function testCzyIstniejeEmail(){
        $rejestracja= new Kino\Rejestracja;
        $email="alicja@kapala.pl";
        $result=$rejestracja->czyIstniejeEmail($email);
        $this->assertTrue($result);
    }


    public function testValidEmail(){
        $rejestracja= new Kino\Rejestracja;

        $email="alicja@kapala.pl";
        public function validEmail($email){
        $result=$rejestracja->validEmail($email);
        $this->assertFalse(!$result);

        $email="123@kapala.pl";
        $result=$rejestracja->validEmail($email);
        $this->assertFalse(!$result);
       
        $email="alicja@kapala";
        $result=$rejestracja->validEmail($email);
        $this->assertTrue(!$result);

        $email="alicja@kapała.pl";
        $result=$rejestracja->validEmail($email);
        $this->assertTrue(!$result);

        $email=" ";
        $result=$rejestracja->validEmail($email);
        $this->assertTrue(!$result);

      
    }

    public function testValidPassword(){
        $rejestracja= new Kino\Rejestracja;
        
        $password="Qwerty";
        $result=$rejestracja->validPassword($password);
        $this->assertFalse(!$result);

        $password="Q w e r t y 1";
        $result=$rejestracja->validPassword($password);
        $this->assertFalse(!$result);

        $password="";
        $result=$rejestracja->validPassword($password);
        $this->assertTrue(!$result);

        $password="qw";
        $result=$rejestracja->validPassword($password);
        $this->assertTrue(!$result);

        $password="qwery";
        $result=$rejestracja->validPassword($password);
        $this->assertTrue(!$result);

    }

   
}