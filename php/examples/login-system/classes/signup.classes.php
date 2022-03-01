<?php

class Signup extends Dbh {

    protected function setUser($uid, $pwd, $fname, $lname, $email, $yyyy, $mm, $dd){

        $stmt = $this->connect()->prepare('INSERT INTO users (users_uid, users_pwd,  users_fname,  users_lname, users_email, users_bday) VALUES (?,?,?,?,?,?)');

        $bdate = date("Y-m-d", mktime(0, 0, 0, $mm, $dd, $yyyy));

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);


        if (!$stmt->execute(array($uid, $hashedPwd, $fname, $lname, $email, $bdate))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }

    protected function checkUser($uid, $email){

        $stmt = $this->connect()->prepare('SELECT users_uid FROM users WHERE users_uid = ? OR users_email = ?');

        if (!$stmt->execute(array($uid, $email))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $resultCheck = '';

        if($stmt->rowCount() == 0){
            $resultCheck = true;
        }
        else{
            $resultCheck = false;
        }
        return $resultCheck;
    }

}