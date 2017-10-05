<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>
    <!-- <?php
      // echo "<h1>HELLO PHP!</h1>";
     ?> -->

     <body>

      <?php
          // 8,5,4,3,0
         /* First method to create array. */
         $numbers = array( 1, 2, 3, 4, 5, 6);

         array_slice($numbers, 2);
        //  3,4,5,6
        array_slice($numbers, 0);
        // 0,3,4,5,6
        array_pop($numbers);
        // 0,3,4,5
        array_push($numbers, 8);
        // 0,3,4,5,8
        $reverse = array_reverse($numbers);

         var_dump($numbers);

         

        // 8,5,4,3,0
        //  $numbers2= array( 8,5,4,3,0);
        //  array_splice($numbers, 0, 1, $numbers2);
        //  array_pop($numbers);
        //  array_pop($numbers);
        //  array_pop($numbers);
        //  array_pop($numbers);
        //  array_pop($numbers);
        // //  array_push($numbers, 0)
        // //  array_shift($numbers);
        // //  array_shift($numbers);
        //  var_dump($numbers);
        //  array_push($numbers, 5, 6);
        //  array_pop($numbers)




         ?>
  </body>
</html>
