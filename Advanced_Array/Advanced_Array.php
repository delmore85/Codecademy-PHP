<html>
  <head>
    <title>Advanced Array</title>
  </head>
  <body>
    <p>
      <?php
      // An associative array:
      $myArray = array('something'=>'Something1',
                        'nothing'=>'Nothing2');


      // Outputting one of the values to the page:
      echo $myArray['something'] . ' ' . "<br />";
     
          
      // Looping through the array and output all of the values:
     foreach ($myArray as $a=>$b){
         echo '<br />$a =&gt; $b';
         echo "<br />Trying more $a =&gt; $b";
         echo "<br />" . $a . $b;
     }
     
      ?>
    </p>
  </body>
</html>