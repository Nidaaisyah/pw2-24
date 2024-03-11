<?php

//for
for($i = 1; $i <10 ; $i ++) {
   echo "<h1> $i </h1>" ;
}

//foreach
$buah = ['mangga','jeruk','semangka'] ;

foreach ($buah as $b){
  echo "<h1>{$b}</h1>";
}