<?php
    /*if(ISSET($_POST['age'])){
      $age = $_POST['age'];
      $result = 2020 -$age;
      echo $result;
   }
   else{
       //echo "check again";
   }*/

   $a= 8;
   
   if(ISSET($_POST['age'])){
   switch('$a'){
    case'8':
    echo "You guess is right";
    break;

       case'7':
       echo "your are very close";
       break;

       case '2':
       echo "you are far";
       break;

       case'10':
       echo "need to decrease your number";
       break;

       case'5':
       echo "You are close";
       break;

       default:
       echo "try again";
       break;
   }
}
?>




<!DOCTYPE html>
<html>
<head></head>
<body>
   <form method="POST">
   <!--
     <label>YOUR AGE</label>
     <input type="number" name="age">-->
     <label>Guess the number</label>
     <input type="number" name="num">
     <input type="submit" value="send">
   </form>
</body>
</html>