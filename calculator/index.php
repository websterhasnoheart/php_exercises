<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action= "<?php echo htmlspecialchars($SERVER['PHP_SELF']);?>" method = "post">
        <input type="number" name="num01" placeholder="Number" required>
        <select name="operator">
            <option value="add">+</option>
            <option value="substract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="num02" placeholder="Number two" required>
        <button>
            Calculate
        </button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Grab data from inputs
        $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
        $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlspecialchars($_POST["operator"]);
        

        // Error handlers
        $errors = false;
        if (!is_numeric($num01) || !is_numeric($num02)) {
            echo "<p class='calc-error'> fill in all fields </p>";
            $errors = true;
        }

        //Calculate the numbers if there is no erros
        if (!$errors) {
            $value = 0;
            switch($operator) {
                case "add":
                    $value = $num01 + $num02;
                    break;
                case "subtract":
                    $value = $num01 - $num02;
                    break;
                case "multiply":
                    $value = $num01 * $num02;
                    break;     
                case "divide":
                    $value = $num01 / $num02;
                    break; 
                default:
                    echo "<p class='clac-error'> Something went wrong </p>";
            }
        echo "<p class='calc-result'>Result = ".$value. "</p>";
        }
    }
    ?>
</body>
</html>