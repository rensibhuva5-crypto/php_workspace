<?php
$result = "";
$num1 = "";
$num2 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op   = $_POST["op"];

    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($op) {
            case "+":
                $result = "Sum is: " . ($num1 + $num2);
                break;

            case "-":
                $result = "Difference is: " . ($num1 - $num2);
                break;

            case "*":
                $result = "Product is: " . ($num1 * $num2);
                break;

            case "/":
                if ($num2 == 0) {
                    $result = "Cannot divide by zero";
                } else {
                    $result = "Quotient is: " . ($num1 / $num2);
                }
                break;

            default:
                $result = "Invalid Operation";
        }
    } else {
        $result = "Please enter valid numbers";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Calculator</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">

</head>
<body>

<div class="calc-body">
    <div class="screen">
        <?php echo $result; ?>
    </div>

    <form method="POST">

        <input type="number" class="form-control mb-2" name="num1" placeholder="First Number" required>
        <input type="number" class="form-control mb-3" name="num2" placeholder="Second Number" required>

        <div class="row g-2 mb-3">
            <div class="col-3"><button name="op" value="+" class="btn btn-calc w-100">+</button></div>
            <div class="col-3"><button name="op" value="-" class="btn btn-calc w-100">-</button></div>
            <div class="col-3"><button name="op" value="*" class="btn btn-calc w-100">×</button></div>
            <div class="col-3"><button name="op" value="/" class="btn btn-calc w-100">÷</button></div>
        </div>

        <button type="submit" class="btn btn-warning w-100">Calculate</button>

    </form>
</div>

</body>
</html>
