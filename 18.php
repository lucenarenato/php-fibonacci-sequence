<?php

class fibonacci
{

   public $x = 0;
   public $y = 1;

   public function fibonacci()
   {
      for ($i = 0; $i <= 10; $i++) {
         $z = $this->x + $this->y;
         echo $z;
         echo "<br>";
         $this->x = $this->y;
         $this->y = $z;
      }
   }
}

$objfib = new fibonacci();
