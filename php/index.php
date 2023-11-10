<?php
class Animal
{
    private int $age;
    private int $height;
    private int $length;
    private string $voice;
    private true $hasTail;
    
    public function satAge(int $age) {
        $this->age = $age;
    }
    public function getAge(int $age) {
        return $this->age;
    }
    public function setHeight(int $height) {
        $this->height = $height;
    }
    public function getHeight(int $height) {
        return $this->height;
    }
    public function setLength(int $length) {
        $this->length = $length;
    }
    public function getLength(int $length) {
        return $this->$length;
    }
     public function setVoice(string $voice) {
        $this->voice = $voice;
    }
    public function getVoice(string $voice) {
       return $this->$voice;
    }
    public function setHasTail(true $hasTail) {
       $this->$hasTail;
    }
    public function getHasTail(true $hasTail) {
        return $this->$hasTail;
    }
}
