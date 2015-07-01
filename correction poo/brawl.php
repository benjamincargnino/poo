<?php

require_once("Character.php");

$bob = new Character(100, 5, 10);
$lennon = new Character(50, 10, 20);

function hit($attacker_name, $attacker, $defender_name, $defender)
{
  printf("$attacker_name attacks $defender_name".PHP_EOL);
  $attacker->attack($defender);
  printf("$defender_name has %d HP".PHP_EOL, $defender->getHp());
  if ($defender->isKo())
  {
    printf("$attacker_name won by Ko, he has %d hp left".PHP_EOL, $attacker->getHp());
    exit;
  }
}


while(true) {
  hit("Bob", $bob, "Lennon", $lennon);
  hit("Lennon", $lennon, "Bob", $bob);
}
