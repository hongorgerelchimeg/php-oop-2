<?php

trait Position {
    private $position = [];
    
    public function setPosition($long, $lat) {
        $this->position['long'] = $long;
        $this->position['lat'] = $lat;
    }
    
    public function getPosition()
    {
        return $this->position;
    }
}