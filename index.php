<?php

/*
  This is the main content file
*/
include("functions.php");
include("header.php");

?>

<div class="square">
  <content>
    How many incomes do you wish to calculate?
    <br>
    <form action="calculate.php" method="get">
      <input type="number" name="num" required>
      <input type="submit" name="submit" value="Next">
    </form>
  <content>
</div>
<div class="square">

</div>

<?php include("footer.php"); ?>
