<?php
class Media {
    protected $type;
    protected $url;

    public function __construct($type, $url) {
        $this->type = $type;
        $this->url = $url;
    }

    public function getType() {
        return $this->type;
    }

    public function getUrl() {
        return $this->url;
    }
}