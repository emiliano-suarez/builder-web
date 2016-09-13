<?php

    class Ejercicio {
        public $valor = 0;
        public $A = [1,4,-1,3,2];
        
        public function setValor($valor=0)
        {
            $this->valor = $valor;
        }
        
        public function printValor()
        {
            // echo "valor: " . $this->valor . "\n";
            echo "(" . $this->A[5] . ")";
        }
        
        public function StairCase($n) {
            for ($i = 1; $i <= $n; $i++) {
                $escalon = str_repeat(" ", ($n - $i));
                $escalon .= str_repeat("#", $i);
                echo $escalon . "\n";
            }
        }
        
        public function sum($numbers){
            $result = 0;
            $n = sizeof($numbers);
            
            for ($i = 0; $i < $n; $i++) {
                $result += $numbers[$i];
            }
            return $result;
        }
        
        public function factorial($n)
        {
            if ($n < 2) {
                return 1;
            }
            else {
                return ($n * $this->factorial($n - 1));
            }
        }
        
        public function balanceSum($A) {
            $sum = 0;
            $sumLeft = 0;
            $sumRight = 0;
            $elements = sizeof($A);
            
            // Sumo la cantidad de todos los elementos
            for ($i = 0; $i < $elements; $i++) {
                $sum += $A[$i];
            }

            for ($i = 0; $i < $elements; $i++) {
                $sumRight = $sum - $sumLeft - $A[$i];
                
                // Veo si el elemento de la posicion 'i', es 
                // el balance del array
                if ($sumLeft == $sumRight) {
                    // Incremento el indice, ya que empieza en 0.
                    return $i + 1;
                }
                
                // Actualizo la suma a la izquierda con el nuevo
                // elemento
                $sumLeft += $A[$i];
            }
        }
        
        public function counterGame($tests)
        {
            foreach ($tests as $game) {
                $counter = $game;
                
                $iteration = 0;
                while ($counter != 1) {
                    $iteration++;
                    // Convierto a binario el contador
                    $binCounter = decbin($counter);
                    // echo "binCounter: " . $binCounter . "\n";
                    
                    $binArray  = array_map('intval', str_split($binCounter));
                    
                    $powOf2 = true;
                    $i = 1;
                    while ($powOf2 and $i < sizeof($binArray)) {
                        if ($binArray[$i] != 0) {
                            $powOf2 = false;
                        }
                        $i++;
                    }
                    
                    if ($powOf2) {
                        // Divido a la mitad
                        $counter = $counter / 2;
                    }
                    else {
                        // Decremento hasta la potencia de 2 mas grande
                        $binCounter = "1" . str_repeat("0", (sizeof($binArray) - 1));
                        // Lo convierto a decimal
                        $counter = $counter - bindec($binCounter);
                    }
                }
                
                // Para ver quien gano, reviso la cantidad de turnos.
                if ($iteration % 2 == 0) {
                    echo "Richard\n";
                }
                else {
                    echo "Louise\n";
                }
            }
        }
    };
        
    $ej1 = new Ejercicio();
    
    $tests = array("1");
    $ej1->counterGame($tests);
    
    // $n = 5;
    // $val = $ej1->factorial($n);

/*
    $A = array(1,3,1);
    $val = $ej1->balanceSum($A);

    echo $val . "\n";
    

    $numbers = array(5,1,2,3,4,5);
        
    $val = $ej1->sum($numbers);
    echo $val . "\n";
*/
    die("\nfin\n");
