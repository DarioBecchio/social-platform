<?php
class Post {
    protected $title;
    protected $content;
    protected $media = [];

    public function __construct($title, $content, ...$media) {
        $this->title = $title;
        $this->content = $content;
        foreach ($media as $m) {
            if ($m instanceof Media) {
                $this->media[] = $m;
            }
        }
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
}