<?php

class Character
{
    protected int $health;
    protected int $mana;

    public function __construct(int $health, int $mana)
    {
        $this->health = $health;
        $this->mana = $mana;
    }

    public function getHealth() : int
    {
        return $this->health;
    }

    public function getMana() : int
    {
        return $this->mana;
    }

}

class Boss extends Character
{
    public static function getBossHealth() : int
    {
        return 10;
    }

    public function getHealth() : int
    {
        return parent::getHealth() * self::getBossHealth();
    }
}

$Vito = new Character(100, 50);

echo "Vito Health: " . $Vito->getHealth();
echo "Vito Mana: " . $Vito->getMana();

$Leo = new Character(200, 50);

echo "Leo Health: " . $Leo->getHealth();
echo "Leo Mana: " . $Leo->getMana();