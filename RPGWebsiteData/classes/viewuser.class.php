<?php
class ViewUser extends Users{

  public function showAllUsers(){
    $datas = $this->getAllUsers();
    foreach ($datas as $data) {
        echo $data['usersUid']."<br>";
        echo $data['usersPwd']."<br>";
    }
  }
}