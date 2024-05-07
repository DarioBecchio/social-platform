<?php
class Media {
    protected $id;
    protected $type;
    protected $path;

    public function __construct($id,$type, $path) {
        $this->id = $id;
        $this->type = $type;
        $this->path = $path;
    }

   

    public function getType() {
        return $this->type;
    }

    public function getPath() {
        return $this->path;
    }
}
class Image extends Media {
    public function display() {
        return "<img src='{$this->getPath()}' alt=''>";
    }
}

class Video extends Media {
    public function display() {
        return "<video src='{$this->getPath()}' controls></video>";
    }
}