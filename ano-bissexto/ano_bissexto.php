<?php
function se_bissexto($ano){
	if ( (($ano%4) == 0 && ($ano%100) != 0) || ($ano%400) == 0 ){
		$bissexto = "O ano de ".$ano." é bissexto \n";
	}else{
		$bissexto = "O ano de ".$ano." NÃO é bissexto <br/>";
	}

	return $bissexto;
}

echo se_bissexto(2016);
?>
