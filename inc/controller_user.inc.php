<?php

class User extends Dbh{

  protected function getAllUsers() {
    $stmt = 'SELECT * FROM Users';
    $result = $this->connect()->query($stmt);
    $numRows = $result->rowCount();

    if ($numRows > 0) {
      while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $data[] = $row;
      }
    }
    return $data; 
  }

}

