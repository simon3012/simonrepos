
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>

<form method="post" action="loginp.php">
            <div class="input-group">
                <label for="username">USERNAME</label>
                <input type="username" id="username" name="login" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="button">Login</button>
        </form>
    <?php
    $name=$_POST['login'];
    echo $name;
    $code="create table user(name )";
    if ($conn->query($code)==true) {
        echo "succeded ";
        # code...
    }
    else {
        echo "error .$sql.";
    }
    ?>
</body>
</html>
   
        <?php
        // Database configuration
        $servername = "localhost"; // XAMPP default
        $username = "root"; // XAMPP default username
        $password = ""; // Default password for XAMPP (leave blank)
        $dbname = "demo"; // Replace with your database name

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Process form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Prepare and bind
            $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $email, $password);

            // Execute the statement
            if ($stmt->execute()) {
                echo "<p style='color: green;'>New record created successfully</p>";
            } else {
                echo "<p style='color: red;'>Error: " . $stmt->error . "</p>";
            }

            // Close statement
            $stmt->close();
        }
// posting  dada to the database 

        // Close connection
        $conn->close();
        ?>
     >
