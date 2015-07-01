<?php

class Character
{
  private $hp;
  private $damageMin, $damageMax;

  public function isKo()
  {
    return $this->hp <= 0;
  }

  public function attack($character)
  {
    $dealt_damage = rand($this->damageMin, $this->damageMax);
    $character->hp -= $dealt_damage;
    printf("He dealt $dealt_damage".PHP_EOL);
  }

  public function getHp()
  {
    return $this->hp;
  }

  public function __construct($hp, $damageMin, $damageMax)
  {
    $this->hp = $hp;
    $this->damageMin = $damageMin;
    $this->damageMax = $damageMax;
  }
}
