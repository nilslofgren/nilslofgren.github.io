<!DOCTYPE html>
<html>

<body>
<p>
<?php echo "Hello World"; ?>
</p>
  <h1>Reading and Writing a File</h1>

  <?php
    $filehandle = fopen("count.txt","r");
    $value = fgets($filehandle);
    fclose($filehandle);
    $string = "hello world";
  ?>

  <h2>The number is <?php echo($string); ?></h2>

  <?php
    $filehandle = fopen("count.txt","w");
    fputs($filehandle, $value + 1);
    fclose($filehandle);
  ?>



<?php
  $filehandle = fopen("bestCustomer.txt","r");
  $value = fgets($filehandle);
  fclose($filehandle);
?>

<h2>Our Best Customer is <?php include "bestCustomer.txt"; ?></h2>

<?php
  $filehandle = fopen("bestCustomer.txt","w");
  fputs($filehandle, document.getElementById("favCustomer").value);
  fclose($filehandle);
?>

</body>
</html>
