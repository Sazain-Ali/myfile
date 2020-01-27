<?php  
  $name = array(
      array("name" => "sobia",
            "maths" => "56",
            "english" => "78",
            "urdu" => "87"),

      array("name" => "maheen",
            "maths" => "56",
            "english" => "78",
            "urdu" => "87"),

        array("name" => "Ali",
            "maths" => "56",
            "english" => "78",
            "urdu" => "87")
        );     
      foreach($name as $keys => $value){
          
        echo $value['name'];
        echo $value['maths'];
        echo $value['english'];
        echo $value['urdu']."<br>";
      };
  //echo print_r($name);

?>