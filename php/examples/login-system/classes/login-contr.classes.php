<?php

class LoginContr extends Login {

private $uid;
private $email;
private $pwd;


    public function __construct($uid, $email, $pwd) {
        $this->uid = $uid;
        $this->uid = $email;
        $this->pwd = $pwd;
    }


    public function loginUser(){

        if($this->emptyInput() == false){
            header("location: ../404.php?error=emptyinput");
            exit();
    }
        else{
        // $this->getUser($this->uid, $this->pwd);
        $this->getUser($this->uid, $this->pwd);
        }
 }

    private function emptyInput() {
    $result = '';
    if(empty($this->uid) || empty($this->pwd) ){
        $result = false;
}

else{
    $result = true;
}

return $result;
}

}