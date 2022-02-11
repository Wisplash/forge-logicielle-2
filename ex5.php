<?php
$m = array('','Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');
 
$date1 = date("n-Y");
$decoupe_date1 = explode('-', $date1);
$mois_date1 = $decoupe_date1[0];
$annee_date1 = $decoupe_date1[1];
echo '$date1 = '.$date1.'<br /><br />';
 
$annee = $annee_date1;
for($i=($mois_date1-1); $i<($mois_date1-1+12); $i++){
	echo $m[1+($i%12)].' '.$annee.'<br />';
	// Décembre ? on change d'année
	if(1+($i%12)==12) { $annee++; }
}
?>