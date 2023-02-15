<html>
<head>
  <title>Tax Calculator</title>
</head>
<body>
  <h2>Tax Calculator</h2>
  
  <?php
    if (isset($_POST['submit'])) {
      $salary = $_POST['salary'];
      $frequency = $_POST['frequency'];
      
      // Compute estimated annual salary
      if ($frequency == "monthly") {
        $annual_salary = $salary * 12;
      } else {
        $annual_salary = $salary * 24;
      }
      
      // Compute year-to-date tax and monthly taxes
      if ($annual_salary <= 80000) {
        $tax = $annual_salary * 0.05;
      } else if ($annual_salary <= 160000) {
        $tax = 4000 + ($annual_salary - 80000) * 0.1;
      } else if ($annual_salary <= 240000) {
        $tax = 9000 + ($annual_salary - 160000) * 0.15;
      } else if ($annual_salary <= 800000) {
        $tax = 22000 + ($annual_salary - 240000) * 0.2;
      } else {
        $tax = 82000 + ($annual_salary - 800000) * 0.25;
      }
      $monthly_tax = $tax / 12;
      
      // Display results
      echo "<p>Estimated Annual Salary: PHP " . $annual_salary . "</p>";
      echo "<p>Year-to-Date Tax: PHP " . $tax . "</p>";
      echo "<p>Monthly Tax: PHP " . $monthly_tax . "</p>";
    }
  ?>
</body>
</html>
