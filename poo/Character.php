<?php 
// Exerercice

// Dans le cadre de la création d'un petit Jeu en ligne on veut se faire affronter des personnages.

// Un personnage est caractérisé :

// par ses points de vie (hp)
// par des dégâts qu'il peut infliger (minimum et maximum)
// Un personnage peut :

// Attaquer un autre personnage (et afficher le nombre de dégât infligé)
// Permettre de savoir s'il est KO (En fonction de ses points de vie)
// Informer de son état de santé
// Compléter la classe Character afin que le programme brawl.php fonctionne correctement. Ne pas modifier brawl.php.

// Fichier Character.php:



class Character
{
	private $hp;
	private $degatsMin;
	private $degatsMax;

	public function __construct($hp, $degatsMin, $degatsMax)
	{
		$this->hp = $hp;
		$this->degatsMin = $degatsMin;
		$this->degatsMax = $degatsMax;
	}

	public function attack($param) {
		$dmg = rand($this->degatsMin, $this->degatsMax);
		$param->hp -= $dmg;
		echo " for " . $dmg . " damage";
	} 

	public function getHp() {
		return $this->hp;
	}

	public function isKo() {
		if($this->hp <= 0) {
			return true;
		} else {
			return false;
		}
	}
}

///////////////////////////////////////////////// Correction ////////////////////////////////////////////////////////

// class Character
// {
//   private $hp;
//   private $damageMin, $damageMax;

//   public function isKo()
//   {
//     return $this->hp <= 0;
//   }

//   public function attack($character)
//   {
//     $dealt_damage = rand($this->damageMin, $this->damageMax);
//     $character->hp -= $dealt_damage;
//     printf("He dealt $dealt_damage".PHP_EOL);
//   }

//   public function getHp()
//   {
//     return $this->hp;
//   }

//   public function __construct($hp, $damageMin, $damageMax)
//   {
//     $this->hp = $hp;
//     $this->damageMin = $damageMin;
//     $this->damageMax = $damageMax;
//   }
// }
