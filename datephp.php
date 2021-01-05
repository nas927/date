<?php 

/*Je met la zone où je me situe pour être sûr que la date sera celle de France.*/
date_default_timezone_set("Europe/Paris");

/*Cette fonction servira à renvoyer la différence d'heure, de minute ou d'année.*/
function temps($time){
	/*On crée une variable qui contiendra la date actuelle.*/
    $datetime1 = new DateTime("now");
	/*Dans cette variable on renfermera la date qu'on mettra à l'appelle de la fonction.*/
    $datetime2 = date_create($time);
	/*Cette fonction est super elle calcule toute la différence entre deux date que ça soit en minute, seconde ou année...*/
    $diff = date_diff($datetime1, $datetime2);
	/*Le message de fin*/
    $time = 'Maintenant';
	
	/*Si l'année est supérieur à 0*/
    if($diff->y > 0){
        $time = "Il y a ".$diff->y .' année'. ($diff->y > 1?"s":'');
    }
	/*Si le mois est supérieur à 0*/
    else if($diff->m > 0){
     $time = "Il y a ".$diff->m . ' mois'. ($diff->m > 1 ?"s":'');
    }
	/*Si le jour est supérieur à 0*/
    else if($diff->d > 0){
     $time = "Il y a ".$diff->d .' jour'. ($diff->d > 1?"s":'');
    }
	/*Si l'heure est supérieur à 0*/
    else if($diff->h > 0){
     $time = "Il y a ".$diff->h .' heure'.($diff->h > 1 ? "s":'');
    }
	/*Si la minute est supérieur à 0*/
    else if($diff->i > 0){
     $time = "Il y a ".$diff->i .' minute'. ($diff->i > 1?"s":'');
    }
	/*Si la seconde est supérieur à 0*/
    else if($diff->s > 0){
     $time = "Il y a ".$diff->s .' seconde'. ($diff->s > 1?"s":'');
    }

return $time;
}

/*Si je lui passe la date actuelle vous l'aurez comprit il va m'afficher maintenant. Encore une fois attention au format ! */ 
echo temps(date("2020-12-15 H:i:s"));