<?php

class ViewUser extends User{

  public function showAllUsers() {
    $datas = $this->getAllUsers();
    foreach($datas as $data) {
      echo "username:".$data['username']."<br>". "password:".$data['password'];
    }
  }

}

