<?php

/**
* 
*/
class Parametre
{
	
	
	function __construct()
	{
		
	}

			  public function parametrer_reservation($date_debut,$date_fin,$heure_debut,$heure_fin)
			{
				$pdo=Base::getBDD();
				$query=$pdo->prepare('insert into parametre_reservation (date_debut,date_fin,heure_debut,heure_fin) values(?,?,?,?)');
				$query->execute(array($date_debut,$date_fin,$heure_debut,$heure_fin));
			}
}


?>