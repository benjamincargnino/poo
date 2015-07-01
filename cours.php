<?php 
///////////////////// LES VARIABLES COMPLEXES ET L'INSTANCIATION

$book = new stdClass

// Vous venez d'instancier votre premier objet en PHP, Félicitation.
// L'instanctiation d'un objet signifie que l'on réserve de la mémoire pour ce dernier, et lui donne ensuite un état initial, 
//nous verrons plus tard comment.

$book->title = "La horde du contrevent";
$book->author * "Alain Damasio";
// cette présentation devient obsolète et on utitlise celle-ci :

class Book
{
	private $title
	public setTitle($title)
	{
		$this->title=$title
	}
}


// constructeurs

class Book
{
  public function __construct($title, $author)
  {
    $this->title  = $title
    $this->author = $author
  }
}