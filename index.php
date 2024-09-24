<!DOCTYPE html>
<html>
<head>
    <title>Calculate Age</title>
</head>
<body>
    <h1>Age Calculator</h1>
    
    <!-- Form to take input -->
    <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="year_of_birth">Year of Birth (B.E.):</label>
        <input type="number" id="year_of_birth" name="year_of_birth" required><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    // Ensure the script is executed only after form submission
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get form data
        $name = htmlspecialchars($_POST["name"]);
        $year_of_birth_be = (int) $_POST["year_of_birth"];
        
        // Convert B.E. to A.D. by subtracting 543
        $year_of_birth_ad = $year_of_birth_be - 543;
        
        // Calculate age
        $current_year_ad = date("Y");
        $age = $current_year_ad - $year_of_birth_ad;
        
        // Output result
        echo "<h2>Output</h2>";
        echo "<p>Hello, " . $name . "! You were born in " . $year_of_birth_ad . " (A.D.) and you are " . $age . " years old.</p>";
    }
    ?>
</body>
</html>
