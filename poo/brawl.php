<?php

require_once("Character.php");

$bob = new Character(100, 5, 10);
$lennon = new Character(50, 10, 20);

while(true) {
  printf("Bob attacks Lennon".PHP_EOL);
  $bob->attack($lennon);
  echo ("<br>");
  printf("Lenon has %d HP left".PHP_EOL, $lennon->getHp());
  echo ("<br>");
  if ($lennon->isKo())
  {
    printf("Bob won by Ko, he has %d hp left".PHP_EOL, $bob->getHp());
    exit;
  }

  printf("Lennon attacks Bob".PHP_EOL);
  $lennon->attack($bob);
  echo ("<br>");
  printf("Bob has %d HP".PHP_EOL, $bob->getHp());
  echo ("<br>");
  if ($bob->isKo())
  {
    printf("Lennon won by Ko, he has %d hp left".PHP_EOL, $lennon->getHp());
    exit;
  }
}