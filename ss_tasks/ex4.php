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

        // Validate age input
        if (!is_numeric($age) || $age < 0) {
            echo "Please enter a valid age.";
        } else {
            if ($age >= 18) {
                echo "$name, you are eligible for voting.";
            } else {
                echo "$name, you are not eligible for voting yet.";
            }
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
    $currentMonth = date('F'); // Get the current month dynamically

    switch ($currentMonth) {
        case 'August':
            echo "<p>It's August, so it's still a holiday.</p>";
            break;
        default:
            echo "<p>Not August, this is $currentMonth, so I don't have any holidays.</p>";
    }
    ?>

    <h3>For Loop: Multiplication Table</h3>
   
    <?php
    $n = 67; 
    for ($i = 1; $i <= 10; $i++) {
        echo "$n x $i = " . ($n * $i) . "<br>";
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