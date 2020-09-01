<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tip Calculator</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  
  <div class="header">
    <h1>Tip Calculator</h1>
  </div>

  <form action="site.php" method="post">

    How much was the bill total?
    <br>
    $<input type="float" name="bill"/>
    <br><br>

    What percentage would you like to tip?
    <br>
    <input type="float" name="tipPercentage"/>%
    <br><br>

    How many people are in your group?
    <br>
    <input type="number" name="people"/> people
    <br><br>

    <button type="submit">Calculate</button>
    <br><br>

  </form>

  <hr>

  <div class="results">
    <?php 
      $bill = $_POST["bill"];
      $tipPercentage = $_POST["tipPercentage"];
      $tip = $bill * ($tipPercentage/100);
      $people = $_POST["people"];
      $share = ($bill + $tip) / $people;

      echo "<h2>Results</h2>";
      echo "The total tip bill is $bill. <br>";
      echo "The total tip is $", $bill * ($tipPercentage/100), ". <br>";
      echo "Your share of the bill is $",$share, "."; 
    ?>
  </div>

</body>
</html>