<?php
namespace App\Models;
class User
{
  public $name;
  public $fname;
  public $lname;
  public $email;
  
  public function create($name)
  {
    $this->name = $name;
  }

  public function setFirstName($value='')
  {
  	$this->fname = $value;
  }

  public function setLastName($value='')
  {
  	$this->lname = $value;
  }

  public function getFirstName()
  {
  	return $this->fname;
  }

  public function getLastName()
  {
  	return $this->lname;
  }

  public function setEmail($value='')
  {
  	$this->email = $value;
  }

  public function getPersonInfo()
  {
  	return [
  		"full_name" => $this->name,
  		"email" => $this->email
  	];
  }

}


 ?>
