<?php
class FizzBuzz
{

	public function fizzbuzzVerifica($inicio,$fim){
		$resultado = array();
		$resultado ="";
		foreach(range($inicio,$fim) as $key){
			if ($key % 3 == 0 && $key % 5 == 0) {
	    		$resultado .= "FizzBuzz<br>";
			} elseif ($key % 3 == 0) {
			    $resultado .= "Fizz<br>";
			} elseif ($key % 5 == 0) {
			    $resultado .= "Buzz<br>";
			}else{
				$resultado .= $key . "<br>";
			}
		}
		return $resultado;
	}

}

$fizzbuss = new FizzBuzz;
$inicio =1;
$final =100;
echo $fizzbuss->fizzbuzzVerifica($inicio,$final);
