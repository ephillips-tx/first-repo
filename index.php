<?php

/*
  This is the main content file
  1. prompt user for number of incomes
  2. send number of incomes and produce 
     form on entry page
*/

include("functions.php");
include("header.php");

?>

<div class="container">
  <content>
    How many incomes do you wish to calculate?
    <br>
    <form action="calculate.php" method="get">
      <input type="number" name="num" required>
      <input type="submit" name="submit" value="Next">
    </form>
  <content>
</div>

<?php include("footer.php"); ?>
