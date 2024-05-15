<?php
require_once 'Media.php';
class Post {
    protected $id;
    protected $title;
    protected $tags;
    protected $media = [];

    public function __construct($id,$title, $tags, Media...$media) {
        $this->id = $id;
        $this->title = $title;
        $this->tags = $tags;
        $this->media = $media;
        
        foreach ($media as $m) {
        if ($m instanceof Media) {
            $this->media[] = $m;
        }
    }

    }

    
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getTags() {
        return $this->tags;
    }

    public function getMedia() {
        return $this->media;
    }

    /*public function displayMedia() {
        $mediaContent = '';
        foreach ($this->media as $media) {
            $mediaContent .= $media->display() . "<br>";
        }
        return $mediaContent;
    }*/
}

//$bestHotel24 = new Post ('1','Best Hotel 2024', 'This is a review of hotels', $media1,$media2);