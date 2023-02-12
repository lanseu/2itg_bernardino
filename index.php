<!DOCTYPE html>
<html>
<head>
    <title>Taxxy: Tax Calculator</title>
</head>
<body>
    <form action="tax.php" method="post">
        Salary: <input type="text" name="salary" required><br>
        Frequency: 
        <input type="radio" name="frequency" value="monthly" required> Monthly
        <input type="radio" name="frequency" value="bi-monthly" required> Bi-Monthly
        <br><br>
        <input type="submit" value="Calculate">
    </form>
</body>
</html>
