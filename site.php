<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tip Calculator</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <!-- Header -->
  <div class="header">
    <h1>Tip Calculator</h1>
  </div>

  <!-- Form  -->
  <form action="site.php" method="post">

  <!-- Bill Amount -->
    How much was the bill total?
    <br>
    $<input type="float" name="bill"/>
    <br><br>

  <!-- Service -->
    How was your service?
    <br>
    <select name="service" id="">
      <option value="great">Great!</option>
      <option value="good">Good</option>
      <option value="okay">Okay</option>
      <option value="bad">Bad</option>
    </select>
    <br><br>

  <!-- Amount of people -->
    How many people are in your group?
    <br>
    <input type="number" name="people"/> people
    <br><br>

  <!-- Submit Button -->
    <button type="submit">Calculate</button>
    <br><br>

  </form>

  <hr>

<!-- Results section and php code -->
  <div class="results">
    <?php 
      $bill = $_POST["bill"];

      // Setting tip amount based on service
      $tipPercentage;
      if ($service == "great") {
        $tipPercentage = 20;
      } else if ($service == "good") {
        $tipPercentage = 18.5;
      } else if ($service == "okay") {
        $tipPercentage = 17;
      } else $tipPercentage = 15;

      // Math for calculations
      $tip = round($bill * ($tipPercentage/100), 2);
      $people = $_POST["people"];
      $share = round((($bill + $tip) / $people), 2);
      $service = $_POST["service"];

      // Printing the results
      echo "<h2>Results</h2>";
      echo "The service was $service. <br>";
      echo "The total bill is $$bill. <br>";
      echo "The total tip is $$tip. <br>";
      echo "Your share of the bill is $",$share, "."; 
    ?>
  </div>

</body>
</html>