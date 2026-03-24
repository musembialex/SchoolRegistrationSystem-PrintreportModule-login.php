<?php
    include "database.php";
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>School Registration System</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        /* Add Background Image to .log Class */
        .log {
            background-image: url('img/b1.jpg'); /* Path to your image */
            background-size: cover; /* Ensures full coverage */
            background-position: center; /* Centers the image */
            background-repeat: no-repeat; /* Prevents repetition */
            width: 100%;
            height: 300px; /* Adjust height as needed */
            border-radius: 10px; /* Adds rounded corners */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
    </style>
</head>
<body class="back">
    <?php include "navbar.php"; ?>
    
    <div class="login">
        <h1 class="heading">Admin Login</h1>
        <div class="log">
	
            <?php
                if (isset($_POST["login"])) {
                    // Secure login query with prepared statements
                    $stmt = $db->prepare("SELECT * FROM admin WHERE ANAME=? AND APASS=?");
                    $stmt->bind_param("ss", $_POST["aname"], $_POST["apass"]);
                    $stmt->execute();
                    $res = $stmt->get_result();

                    if ($res->num_rows > 0) {
                        $ro = $res->fetch_assoc();
                        $_SESSION["AID"] = $ro["AID"];
                        $_SESSION["ANAME"] = $ro["ANAME"];
                        echo "<script>window.open('admin_home.php','_self');</script>";
                        exit();
                    } else {
                        echo "<div class='error'>Invalid Username or Password</div>";
                    }
                    $stmt->close();
                }

                if (isset($_GET["mes"])) {
                    echo "<div class='error'>{$_GET["mes"]}</div>";
                }
            ?>
            
            <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                <label>User Name</label><br>
                <input type="text" name="aname" required class="input"><br><br>
                <label>Password</label><br>
                <input type="password" name="apass" required class="input"><br><br>
                <button type="submit" class="btn" name="login">Login Here</button>
            </form>
        </div>
    </div>

    <div class="footer">
        <footer><p>Designed by &copy; Alex the Guru</p></footer>
    </div>

    <script src="js/jquery.js"></script>
    <script>
        $(document).ready(function(){
            $(".error").fadeTo(1000, 100).slideUp(1000, function(){
                $(".error").slideUp(1000);
            });
            
            $(".success").fadeTo(1000, 100).slideUp(1000, function(){
                $(".success").slideUp(1000);
            });
        });
    </script>
</body>
</html>
