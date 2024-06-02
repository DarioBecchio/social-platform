<?php
require_once 'Media.php';
class Post
{
  protected $id;
  protected $title;
  protected $tags;
  protected $media = [];

  public function __construct($id, $title, $tags, Image|Video ...$media)
  {
    $this->id = $id;
    $this->title = $title;
    $this->tags = $tags;
    $this->media = $media;
    
  }

  public function getId()
  {
    return $this->id;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function getTags()
  {
    return $this->tags;
  }

  public function getMedia()
  {
    return $this->media;
  }
}
