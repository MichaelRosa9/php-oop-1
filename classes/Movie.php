<?php

class Movie
{
  public $title;
  public $genre;

  function __construct($_title, $_genre)
  {
    $this->title = $_title;
    $this->genre = $_genre;
  }

}

?>