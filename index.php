<html>
<head>
<title>BMI Calculator</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<?php 
  if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
?>
<form method="POST">
<div class="container">
  <div class="header">
    BMI Calculator
  </div>
  <div class="body">
    <div class="choose">
      <input type="radio" name="gender" value="male" id="male" checked>
      <label for="male">
        <div class="item">
          <i class="icon icon-male"></i>
          Male
        </div>
      </label>
      <input type="radio" name="gender" value="female" id="female">
      <label for="female">
        <div class="item">
          <i class="icon icon-female"></i>
          Woman
        </div>
      </label>
    </div>
    <div class="inputs">
      <div class="item">
        <span>Height (in cm)</span>
        <input type="number" name="height" required>
      </div>
      <div class="item">
        <span>Weight (in kgs)</span>
        <input type="number" name="weight" required>
      </div>
    </div>
  </div>
  <div class="footer">
    <button type="Submit">Submit</button>
  </div>
</div>
</form>
<?php
}
?>
<?php 
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
?>
<div class="container">
  <div class="header">
    BMI Calculator
  </div>
  <div class="body">
    <div class="results">
      <span>Your BMI is</span>
      <?php 
      $weight=(int)$_POST['weight'];
      $height=(int)$_POST['height'];
      $bmi=$weight/(($height/100)*($height/100));
      $bmiresult=number_format($bmi, 2, '.', '');
      ?>
      <strong><?php echo $bmiresult; ?></strong>
    </div>
    <div class="infos">
      <span></span>
      <span>Underweight = <18.5</span>
      <span>Normal weight = 18.5–24.9</span>
      <span>Overweight = 25–29.9</span>
      <span>Obesity = BMI of 30 or greater</span>
    </div>
  </div>
  <div class="footer">
    <a href="index.php">Recalculate BMI</a>
  </div>
</div>
<?php
}
?>
</body>
</html>