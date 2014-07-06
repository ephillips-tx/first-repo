<?php

$num_incomes = $_GET["num"];

include("header.php");

?>

<form action="results.php" method="get">

<?php 
  for( inc in $num_incomes  ){ 
?>
    <select class="frequencies">
      <option value="Weekly" selected></option>
      <option value="Biweekly"></option>
      <option value="Semimonthly"></option>
      <option value="Monthly"></option>
    </select>
    <input class="income" type="number" name="income" size="5" min="0">
<?php } ?>

<input type="submit" value="Calculate">
</form>

<?php include("footer.php"); ?>
