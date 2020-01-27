<?php 
  
  $user = array("1" => "one", 
                "2" => "two",
                "3" => "three",
                "4" => "four",
                "5" => "five",
                "6" => "six",
                "8" => "eight",
                "7" => "seven",
                "9" => "nine",
                "10" => "ten",
                "11" => "eleven",
                "12" => "twelve",
                "13" => "thirteen",
                "14" => "fourteen",
                "15" => "fifteen",
                "16" => "sixteen",
                "17" => "seventeen",
                "18" => "eighteen",
                "19" => "nineteen",
                "20" => "twenty",
                "30" => "thirty",
                "40" => "forty",
                "50" => "fifty",
                "60" => "sixty",
                "70" => "seventy",
                "80" => "eighty",
                "90" => "ninety",
                "10" =>"one hundred",
                "10" =>"one thousand",
                "10" => "one lac");

        function myfunction($n){

            if ($n in $user) {
                return $user[$n]
              };

            if ($n > "20" && $n < "100") {
                 myfunction(Math.floor($n));
        }        

   if(isset($_POST['num'])){
       $num = $_POST['num'];
       echo 

   }             

?>













<!DOCTYPE hytml>
<head></head>

<body>
   <form method="post">
     <label>ENTER YOUR NUMBER</label>
     <input type="number" name="num">
     <input type="submit" value="ENTER">
   </form>
</body>
</html>