<?php
class Post {
    protected $id;
    protected $title;
    protected $content;
    protected $media = [];

    public function __construct($id,$title, $content, Media...$media) {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->media = $media;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getContent() {
        return $this->content;
    }

    public function getMedia() {
        return $this->media;
    }

    public function displayMedia() {
        $mediaContent = '';
        foreach ($this->media as $media) {
            $mediaContent .= $media->display() . "<br>";
        }
        return $mediaContent;
    }
}