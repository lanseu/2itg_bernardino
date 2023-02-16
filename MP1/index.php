<!DOCTYPE html>
<html>
<head>
    <title>Taxxy: Tax Calculator</title>
    <link rel="Calculator Icon" href="img/icon.png">
    <meta http-equiv= "X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!--Input Container-->
<div class="container"> 
    <!--Design Addition-->
    <img src="img/1.png" alt="designs" class="design1">
    <img src="img/2.png" alt="designs" class="design2">
    <img src="img/3.png" alt="designs" class="design3">
    <div class="row">
            <!--Input of Salary-->
            <div class="col">
                <div class="card">
                    <h1><span class="colored-text">Taxxy:</span><br>Tax Calculator</h1>
                    <form action="#" method="POST">
                        <label class="title" for="salary">Salary: </label><br>
                        <input class="salary" type="text" name="salary" required>

                                <label class="frequency">Type:</label>
                                    <div class="btn-group">
                                        <input type="radio" class="btn-check" value="monthly" name="options" id="monthly" />
                                        <label class="btn btn-warning" for="monthly">Monthly</label>

                                        <input type="radio" class="btn-check" value="bi-monthly" name="options" id="bi-monthly" />
                                        <label class="btn btn-warning" for="bi-monthly">Bi-Monthly</label>
                                    </div>

                        <input class="submit" type="submit" value="Calculate" name="submit">
                    </form>
                </div>  
            </div> 
            <!--Outputted Tax-->
            <div class="col">
            <div class="card">
              <h2>Tax Computation</h2>
                <?php
                if (isset($_POST['submit'])) {
                  //Validation for Type of Salary
                    if (!isset($_POST['options'])) {
                      echo '<div class="alert alert-danger" role="alert">
                        Please Select Type of Salary!
                      </div>';
                    } else {
                    $salary = $_POST['salary'];
                    $frequency = $_POST['options'];

                    // Computation for Annual Salary
                    if ($frequency == "monthly") {
                      $annual_salary = $salary * 12;
                    } else {
                      $annual_salary = $salary * 24;
                    }
                    
                    // Computation for Tax based on Annual Salary
                    if ($annual_salary <= 250000) {
                      $tax = 0;
                    } else if ($annual_salary <= 400000) {
                      //Threshold for computation of the excess
                      $thresholdTax = 250000;
                      $excessSalary = $annual_salary - $thresholdTax;
                      $tax = $excessSalary * 0.2 ;
                    } else if ($annual_salary <= 800000) {
                      $thresholdTax = 400000;
                      $excessSalary = $annual_salary - $thresholdTax;
                      $tax = 30000 + ($excessSalary * 0.25);
                    } else if ($annual_salary <= 2000000) {
                      $thresholdTax = 800000;
                      $excessSalary = $annual_salary - $thresholdTax;
                      $tax = 130000 + ($excessSalary * 0.3);
                    } else if ($annual_salary <= 8000000) {
                      $thresholdTax = 2000000;
                      $excessSalary = $annual_salary - $thresholdTax;
                      $tax = 490000 + ($excessSalary * 0.32);
                    } else {
                      $thresholdTax = 8000000;
                      $excessSalary = $annual_salary - $thresholdTax;
                      $tax =2410000 + ($excessSalary * 0.35);
                    }
                    $monthly_tax = $tax / 12;
                
                //Displaying the Ouput
                echo "<p>Total Annual Salary: </p> ";
                echo '<span class="colored-text"> PHP ' . $annual_salary . '</span>' ;
                echo "<p>Estimated Annual Tax: </p> ";
                echo '<span class="colored-text"> PHP ' . $tax . '</span>';
                echo "<p>Estimated Monthly Tax: </p> ";
                echo '<span class="colored-text"> PHP ' . $monthly_tax . '</span>';
                }
                }
                ?>
            </div>
            </div>
        </div>
</div>
</body>
</html>
