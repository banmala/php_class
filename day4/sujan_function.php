
 <!-- a. Create a function that sanitizes a string by removing HTML tags, backslash with the signature sanitize (String): String -->
  <!DOCTYPE HTML>
 <html>
 <head>
  <title>ASSIGNMENT 2</title>
 </head>
 <body>
  <h3>1.SANITIZATION OF A STRING</h3>
  <?php
  function sanitize($b){
        $clean = preg_replace('/[^A-Z a-z 0-9 ]/', '', $b);
        return($clean);
    }
    $a ="adasdad<>/adfasd/fadSFGVFSGSBG2323534546fa<br>af////<><>?adf<>";
    echo 'Before Sanitization it was:<br>'.$a;
    echo"<br>";
    echo "After Sanitization it becomes:<br>".sanitize($a);
  ?>
   <h3>2.DISPLAY THE CONTENT OF AN ARRAY</h3>
   <?php
      function debugger($arr){
        echo"<pre>";
        print_r($arr);
        echo"</pre>";
      }
      $index = array('mango', 'apple','banana');
      echo"Indexed array:<br>";
      echo debugger($index);
      $associative = array('Name' =>'K1' ,
              'class' => '10',
              'Roll' =>'67',
              'Status'=>'Cool' );
      echo "Associative array:<br>";
      debugger($associative);
      $multi= array(
        array('name'=>'Sujan','address'=>'ktm'),
        array(
      'name'=>'Ram',
      'address'=>'PKr'
      ));
      echo "Multidimensional array:<br>";
      debugger($multi);
   ?>
   <h3>3.GENERATE A RANDOM TEXT SIGNATURE</h3>
   <?php
        function tokenizer($string){
          $random = '' ;
          $length = strlen($string);
          for ($i=0; $i < $length ; $i++) {
            $random .= $string[rand(0, $length)]; 
            # code...
          }
          //$x = implode('', $random);
          return $random;
        }
        $s = "KhwopaCollegeOfEngineering2022";
        echo"Before randomization:<br>".$s;
        echo"<br>";
        echo"After randomization:";
        echo(tokenizer($s));
   ?>
   <h3> 4.Create a table with field name ‘S.N.’, ‘username’, ’email’, also create a multidimensional array such that associative array is inside the indexed array and store the username and email of 10 random people. Then display the of the array in the table.
  </h3>
   <?php
         $multidim = array(
                         array('SN'=>1,'UserName' => 'U1',"EMAIL" => "U1@rocket.com"),
                          array('SN'=>2,'UserName' => 'U2',"EMAIL" => "U2@rocket.com"),
                          array('SN'=>3,'UserName' => 'U3',"EMAIL" => "U3@rocket.com"),
                          array('SN'=>4,'UserName' => 'U4',"EMAIL" => "U4@rocket.com"),
                          array('SN'=>5,'UserName' => 'U5',"EMAIL" => "U5@rocket.com"),
                          array('SN'=>6,'UserName' => 'U6',"EMAIL" => "U6@rocket.com"),
                          array('SN'=>7,'UserName' => 'U7',"EMAIL" => "U7@rocket.com"),
                          array('SN'=>8,'UserName' => 'U8',"EMAIL" => "U8@rocket.com"),
                          array('SN'=>9,'UserName' => 'U9',"EMAIL" => "U9@rocket.com"),
                          array('SN'=>10,'UserName' => 'U10',"EMAIL" => "U10@rocket.com")
                         );
   ?>
   <table style ="width:100%">
     <tr>
       <th>SN</th>
       <th>Username</th>
       <th>Email</th>
     </tr>
     <?php
       for ($i=0; $i <10 ; $i++) {
           echo '
                 <tr>
                   <td style ="text-align: center; ">'.$multidim[$i]["SN"].'</td>
                   <td style ="text-align: center; ">'.$multidim[$i]["UserName"].'</td>
                   <td style ="text-align: center; ">'.$multidim[$i]["EMAIL"].'</td>
                   </tr>
                   ' ;
         # code...
       }
     ?>
   </table>
 </body>
 </html>