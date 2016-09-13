<?php

    class Test {
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
        
        public function solution($A)
        {
            // Siempre hay un element, aunque sea, con -1
            $count = 1;
            $value = $A[0];
            
            while ($value != -1) {
                $count++;
                $value = $A[$value];
            }
            
            return $count;
        }
    };
    
    class Point3D {
        var $x = 0;
        var $y = 0;
        var $z = 0;

        public function set($x, $y, $z) {
            $this->x = $x;
            $this->y = $y;
            $this->z = $z;
        }
    }

    class Result {

        public function solution($points)
        {
            $result = array();
            foreach ($points as $point) {
                // Calculo
                $radius = sqrt(pow($point->x, 2) + pow($point->y, 2) + pow($point->z, 2));
                $result[$radius]++;
            }
            
            return sizeof($result);
        }

    };
    
    $point0 = new Point3D();
    $point0->set(0,5,4);
    
    $point1 = new Point3D();
    $point1->set(0,0,-3);
    
    $point2 = new Point3D();
    $point2->set(-2,1,-6);

    $point3 = new Point3D();
    $point3->set(1,-2,2);
        
    $point4 = new Point3D();
    $point4->set(1,1,1);
    
    $point5 = new Point3D();
    $point5->set(4,-4,3);
    
    $points = array($point0, $point1, $point2, $point3, $point4, $point5);
    
    $result = new Result();
    $val = $result->solution($points);

    echo "cantidad de esferas: " . $val . "\n";
    /*
    class Bug {
    
        public function solution(&$A, $K) {
            $i = 0;
            $n = sizeof($A);
            for($i = 0; $i < $n - 1; $i++)
                if ($A[$i] + 1 < $A[$i + 1])
                    return False;
            if ($A[0] != 1 OR $A[$n - 1] != $K)
                return False;
            else
                return True;
        }
    }

    $A0 = [1];
    $A1 = [1,1,2,3,3];
    $A2 = [1,1,3];
    $A3 = [1,2,3,4,5,6,7];
    
    $K = 1;
    
    $bug = new Bug();
    $result = $bug->solution($A1, $K);
    
    echo "result: " . ($result ? "true" : "false") . "\n";
    

    $test = new Test();
    // $test->setValor(10);
    // $test->printValor();
    $result = $test->solution($test->A);
    echo "result: " . $result . "\n";
*/
    die("\nfin\n");

/*
            $elements = sizeof($A);
            $sum = 0;
            $sumLeft = 0;
            $sumRight = 0;
            
            for ($i = 0; $i < $elements; $i++) {
                $sum += $A[$i];
            }
            
            for ($i = 0; $i < $elements; $i++) {
                
                $sumRight = $sum - $sumLeft - $A[$i];
                
                if ($sumLeft == $sumRight) {
                    echo "i: " . $i . "\n";
                }
                
                $sumLeft += $A[$i];
            }
        }
*/
