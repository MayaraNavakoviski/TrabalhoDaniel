<?php 

class Link {

    // Atributos:
    private $linkImg;
    private $info;

    // GETs e SETs:

    public function getLinkImg() {
        return $this->linkImg;
    }
    public function setLinkImg($linkImg): self {
        $this->linkImg = $linkImg;
        return $this;
    }

    public function getInfo() {
        return $this->info;
    }

    public function setInfo($info): self {
        $this->info = $info;
        return $this;
    }
}