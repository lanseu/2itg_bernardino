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
    <div class="row">
        <!--Input of Salary-->
        <div class="col">
            <div class="card">
                <h1>Taxxy: Tax Calculator</h1>
                <form action="#" method="POST">
                    <label class="title" for="salary">Salary: </label><br>
                    <input class="salary" type="text" name="salary" required>

                            <label class="frequency">Frequency:</label>
                                    <p>
                                <div class="btn-group">
                                    <input type="radio" class="btn-check" value="monthly" name="options" id="monthly" />
                                    <label class="btn btn-warning" for="option1">Monthly</label>

                                    <input type="radio" class="btn-check" value="bi-monthly" name="options" id="bi-monthly" />
                                    <label class="btn btn-warning" for="option2">Bi-Monthly</label>
                                </div>

                    <input class="submit" type="submit" value="Calculate">
                </form>
            </div>  
        </div> 
            <!--Outputted Tax-->
            <div class="col">
            <div class="card">
                <?php
                if (isset($_POST['submit'])) {
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
                      $tax = $annual_salary;
                    } else if ($annual_salary <= 400000) {
                      $tax = $annual_salary * 0.2;
                    } else if ($annual_salary <= 800000) {
                      $tax = 30000 + ($annual_salary * 0.25);
                    } else if ($annual_salary <= 2000000) {
                      $tax = 130000 + ($annual_salary * 0.3);
                    } else if ($annual_salary <= 8000000) {
                      $tax = 490000 + ($annual_salary * 0.32);
                    } else {
                      $tax =2410000 + ($annual_salary * 0.35);
                    }
                    $monthly_tax = $tax / 12;
                    
                print "<p>Estimated Annual Salary: PHP " . $annual_salary . "</p>";
                echo "<p>Year-to-Date Tax: PHP " . $tax . "</p>";
                echo "<p>Monthly Tax: PHP " . $monthly_tax . "</p>";
                }
                ?>
            </div>
            </div>
        </div>
</div>
</body>
</html>
