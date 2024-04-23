<?php
class Media {
    protected $type;
    protected $path;

    public function __construct($type, $path) {
        $this->type = $type;
        $this->path = $path;
    }

    public function getType() {
        return $this->type;
    }

    public function getUrl() {
        return $this->path;
    }
}