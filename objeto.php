<!-- 
******************************************************
** Avaliação: Avaliação do desenvolvedor FullStack
** Candidato: Paulo Soares de Oliveira
** Class Struct
** LEXART Labs - 2021 
****************************************
**
**
***** 
-->
<?php
class Struct {
	public $number;
	public $arrNumber = array();


	// DIVISÃO
	public function division($i,$ii){

		if(is_numeric($i) AND $i > 0 and is_numeric($ii) AND $ii > 0) {
			$this->number = $i/$ii;
			print "Valor da Divisão: {$this->number}";	
		}else{
			print "NÃO PODE DIVISÃO POR 0";
			exit;
		}
	}

	// ADIÇÃO
    public function sum($i)	
    {
        $this->arrNumber[0] = $i;
        print "Valor da Adição: ".array_sum($this->arrNumber[0]);
    }
 
 	// SUBTRAÇÃO
    public function subtraction(array $i)	
    {    	
 		$arraySub = array();
 		for($x = 0; $x < count($i)-1; $x++){
 			$arraySub[$x] = $i[$x+1]-$i[$x];
 			print "Valor Subtração: ".$arraySub[$x]."<br>";
 		}
 	}

 	// MULTIPLICAÇÃO
    public function multiplication(array $i)	
    {    	
 		$arrayMul = array();
 		for($x = 0; $x < count($i)-1; $x++){
 			$arrayMul[$x] = $i[$x+1]*$i[$x];
 			print "Valor Multiplicação: ".$arrayMul[$x]."<br>";
 		}
 	}

 	// ID ALEATÓRIO
 	public function generarId(){ 		
 		$a1 = ['x','a','b','c','0','1','2','3','4','5','6','7','8','9']; 

 		$xx = array();
 		$aa = array();
 		$bb = array();
 		$cc = array();

		for($i = 0 ; $i <= 15; $i++){
 			$r1 = array_rand($a1);
 			array_push($aa,$r1);
 		}

	 	print "ID Aleatório: ".

	 		 $a1[$aa[0]].$a1[$aa[1]].$a1[$aa[2]].$a1[$aa[3]].'-'.
	 	     $a1[$aa[4]].$a1[$aa[5]].$a1[$aa[6]].$a1[$aa[7]].'-'.
			 $a1[$aa[8]].$a1[$aa[9]].$a1[$aa[10]].$a1[$aa[11]].'-'.
			 $a1[$aa[12]].$a1[$aa[13]].$a1[$aa[14]].$a1[$aa[15]];
 	}

}

// DIVISÃO 
$p1 = new Struct;
$p1->division(10,5);

print "<br>";
print "<br>";

// ADIÇÃO
$p2 = new Struct;
$p2->sum([1,2,3]);

print "<br>";
print "<br>";

// SUBTRAÇÃO
$p3 = new Struct;
$p3->subtraction([1,9,10]);

print "<br>";
print "<br>";

// MULTIPLICAÇÃO
$p4 = new Struct;
$p4->multiplication([1,9,10]);

print "<br>";
print "<br>";

$p5 = new Struct;
$p5->generarId();