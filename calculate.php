<?php

/*
  1. generate forms for entry by user
     based on number of incomes provided
  2. receive user input for pay frequency 
     and income amount
  3. send information to results page for 
     processing
*/

$num_incomes = $_GET["num"];

include("header.php");

?>

<form action="results.php" method="get">

<?php 
$count = 1;
for( $inc in $num_incomes  ){ 
?>
  <select class="frequencies" name="frequency<?php print $count; ?>">
    <option value="Weekly" selected></option>
    <option value="Biweekly"></option>
    <option value="Semimonthly"></option>
    <option value="Monthly"></option>
  </select>
  <input class="income" type="number" name="income<?php print $count; ?>" size="5" min="0">
<?php } ?>
  <input type="submit" value="Calculate">
</form>

<?php include("footer.php"); ?>
