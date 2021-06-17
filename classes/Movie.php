<?php

class Movie
{
  public $title;
  public $genre;
  private $price;
  private $release_date;

  function __construct($_title, $_genre)
  {
    $this->title = $_title;
    $this->genre = $_genre;
  }

  function set_price()
  {
    if($this->genre === 'Horror'){
      $this->price = 7;
    } else{
      $this->price = 9;      
    }
  }

  function get_price(){
    return $this->price;
  }

  
}

?>