<?php

class UsersLogs extends Login{
    
    public function logUser($uid, $pwd) {

    date_default_timezone_set('Asia/Taipei');
    $date = date_create();
    $dateLog = $date->format('Y-m-d H:i:s');
    $stmt = $this->connect()->prepare('INSERT INTO users_logs (users_uid, users_log_date) VALUES (?,?)');
    if(!$stmt->execute(array($uid, $dateLog))){
        $stmt = null;
        header("location: ../index.php?error=stmtfailed");
                exit();
            }
            else{
                $this->getUser($this->uid, $this->pwd);
                // echo "asdasdasd";
            }
    }
}