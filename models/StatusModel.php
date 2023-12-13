<?php

class StatusModel extends SistemModel
{
  public function getAll()
    {
      $q = "SELECT * FROM status";
      return $this->db->query($q)->fetch_all(MYSQLI_ASSOC);
    }

  
}