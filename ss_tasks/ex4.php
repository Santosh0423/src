<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 4: If-Else, Switch Case, Loops - Your Name</title>
</head>
<body>
    <h2>Exercise 4: If-Else, Switch Case, Loops</h2>

    
    <h3>If-Else: Check Voting Eligibility</h3>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];

        if ($age >= 18) {
            echo "$name, you are eligible for voting.";
        } else {
            echo "$name, you are not eligible for voting yet.";
        }
    }
    ?>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="age">Age:</label>
        <input type="number" name="age" required><br>

        <input type="submit" name="submit" value="Check Eligibility">
    </form>

    <h3>Switch Case: Check Current Month</h3>
    <?php
    $currentMonth = date('F');

    switch ($currentMonth) {
        case 'August':
            echo "It's August, so it's still holiday.";
            break;
        default:
            echo "Not August, this is $currentMonth so I don't have any holidays.";
    }
    ?>

   
    <h3>For Loop: Multiplication Table</h3>
    <?php
    $n = 15; 
    for ($i = 1; $i <= 10; $i++) {
        echo "$n x $i = " . ($n * $i) . "<br>";
    }
    ?>

    
    <h3>While Loop: Print Numbers from 1 to n</h3>
    <?php
    $n = 20;
    $counter = 1;
    while ($counter <= $n) {
        echo "$counter ";
        $counter++;
    }
    ?>

   
    <h3>Foreach Loop: Print Elements of an Array</h3>
    <?php
    $colors = array("Red", "Green", "Blue", "Yellow");

    foreach ($colors as $color) {
        echo "$color ";
    }
    ?>

</body>
</html>

<?php include 'footer.php'; ?>
