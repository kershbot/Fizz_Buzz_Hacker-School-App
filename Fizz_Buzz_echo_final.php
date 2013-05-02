<html> 
<head> 
<title> FizzBuzz</title>
</head>

<body>
<p>

<?php
$fizz = 3 ;
$buzz = 5 ;



  for($numbers = 1; $numbers <101; $numbers ++) {
/* 		echo $numbers;  */
		
				if ($numbers % $fizz==0){
				echo "fizz"; 
				}
				
	/*
				else {
			echo $numbers; 
		}
*/
				
				if ($numbers % $buzz==0){
				echo "buzz"; 
				}
/*
				
				if ($numbers % $buzz==0; $numbers % $fizz ==0){
				echo "fizzbuzz"; 
				}
*/
		/*
	if ($numbers /5; $numbers / 3){ 
				echo "fizzbuzz";
			}
*/
			
	/*
		if ($numbers % $fizz && % $buzz == 0) {
    echo 'This number is divisible by 6.';
}
*/

			else {
			echo $numbers; 
		}
	}

?>
</p>

</body>
</html>
