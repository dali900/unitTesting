<?php
namespace App\Models;
class User
{
  public $name;
  
  public function create($name)
  {
    $this->name = $name;
  }

}


 ?>
