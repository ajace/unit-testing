<?php

class Fibonacci {  
    public $numbers = array();
    public $response = '';

    public function __construct($n)
    {
        if ( is_numeric($n) && $n > 0) {
            $n = $this->prep($n);
            $this->numbers = $this->calculate_loop($n);
            $this->response = $this->generate_output();
        }
    }

    /**
     * @return  int
     */
    public function prep($n)
    {
        return intval($n);
    }
    
    /**
     * @return  array
     */
    public function calculate_loop($n)
    {
        $result = array(0);

        if ($n == 1) {
            $result[0] = 1;    
        } else if ($n == 2) {
            $result = array(0,1);    
        } else if ($n > 2) {
            $result = array(0,1);
            $result[2] = $result[0] + $result[1];

            for ( $i=2; $i<=$n; ++$i ) {
                $result[$i] = $result[$i-1] + $result[$i-2];
            }            
        }
        return $result;
    }

    public function calculate_execution_time()
    {
        return $time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
    }
 
    /**
     * @return  string
     */
    public function generate_output() 
    { 
        $output = implode( $this->numbers, ', ');
        $output .= "<br><p>Execution time: " . $this->calculate_execution_time() . " seconds</p>";
        return $output; 
    }
}