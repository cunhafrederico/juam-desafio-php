<?php
iniciaExec(); // inicia a função de cálculo do tempo da execução
global $tempo;

// Pega o tempo
function pegaTempo(){
	$microtime = explode(" ", microtime());
	$tempo = $microtime[0] + $microtime[1];
	return $tempo;
}

// Calcula o tempo do início
function iniciaExec(){
	global $tempo;
	$tempo = pegaTempo();
}

function se_bissexto($ano){
	if ( (($ano%4) == 0 && ($ano%100) != 0) || ($ano%400) == 0 ){
		$bissexto = "O ano de ".$ano." é bissexto \n";
	}else{
		$bissexto = "O ano de ".$ano." NÃO é bissexto <br/>";
	}

	return $bissexto;
}
echo se_bissexto(2400); // Parâmetro receberá o ano a ser pesquisado

// Calcula o fim da execução do script,
// Apresenta o tempo de em ms
function fimExec(){
	global $tempo;
	$fim = pegaTempo();
	$tempoExec = $fim - $tempo;
	return "Tempo de execução: ".number_format($tempoExec, 6)." ms \n";
}
echo fimExec();
?>
