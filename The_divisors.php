<?php 
//for test case data 42
function printDivisors($n) 
{ 
	for ($i = 1; $i <= $n; $i++) 
		if ($n % $i == 0) 
			echo $i," "; 
} 

echo "The divisors of 42 are:\n"; 
printDivisors(42); 

?> 


<?php 
//for test case data 147
function printDivisors($n) 
{ 
	for ($i = 1; $i <= $n; $i++) 
		if ($n % $i == 0) 
			echo $i," "; 
} 

echo "The divisors of 147 are:\n"; 
printDivisors(147); 

?> 
