<html>
<head>
<title>BMI Calculator</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
  <div class="header">
    BMI Calculator
  </div>
  <div class="body">
    <div class="choose">
      <input type="radio" name="gender" value="male" id="male" checked>
      <label for="male">
        <div class="item">
          Male
        </div>
      </label>
      <input type="radio" name="gender" value="female" id="female">
      <label for="female">
        <div class="item">
          Woman
        </div>
      </label>
    </div>
    <div class="inputs">
      <div class="item">
        <span>Height (in cm)</span>
        <input type="text" name="height">
      </div>
      <div class="item">
        <span>Weight (in kgs)</span>
        <input type="text" name="weight">
      </div>
    </div>
  </div>
  <div class="footer">
    <button class="hide">Submit</button>
    <button>Recalculate BMI</button>
  </div>
</div>
<div class="container hide">
  <div class="header">
    BMI Calculator
  </div>
  <div class="body">
    <div class="results">
      <span>Your BMI is</span>
      <strong>21.4</strong>
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
    <button class="hide">Submit</button>
    <button>Recalculate BMI</button>
  </div>
</div>
</body>
</html>