<?php

class Personnage
{
	const MAX_VIE = 150;

	protected $vie = 80;
	protected $atk = 20;
	protected $nom;

	public function __construct($nom)
	{
		$this->nom = $nom;
	}

	public function getVie()
	{
		return $this->vie;
	}

	public function setVie($vie)
	{
		return $this->vie = $vie;
	}

	public function getAtk()
	{
		return $this->atk;
	}

	public function setAtk($atk)
	{
		return $this->atk = $atk;
	}

	public function getNom()
	{
		return $this->nom;
	}

	public function setNom($nom)
	{
		return $this->nom = $nom;
	}

	public function regenerer($points = null)
	{
		if(is_null($points))
		{
			return $this->vie = self::MAX_VIE;
		}
		else
		{
			return $this->vie += $points;
		}
	}

	public function mort()
	{
		return $this->vie <= 0;
	}

	protected function empecher_negatif()
	{
		if($this->vie < 0)
		{
			$this->vie = 0;
		}
	}

	public function attaque($cible)
	{
		$cible->empecher_negatif();
		return $cible->vie -= $this->atk;
	}
}