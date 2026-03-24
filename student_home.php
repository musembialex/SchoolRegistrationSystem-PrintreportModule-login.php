<?php
    include "database.php";
    session_start();
    if (!isset($_SESSION["ID"])) {
        echo "<script>window.open('student_login.php?mes=Access Denied...', '_self');</script>";
    }

    $sql = "SELECT * FROM student WHERE ID={$_SESSION["ID"]}";
    $res = $db->query($sql);

    if ($res->num_rows > 0) {
        $row = $res->fetch_assoc();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Student Home</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <?php include "navbar.php"; ?><br>
        <div id="section">
            <?php include "sidebar.php"; ?><br>
            <h3 class="text">Welcome <?php echo $_SESSION["NAME"]; ?></h3><br><hr><br>
            <div class="content">
                <h3>Add Profile</h3><br>
                <div class="lbox1">
                <?php
                    if (isset($_POST["submit"])) {
                        // Target folder creation and file upload validation
                        $target = "student/";
                        if (!is_dir($target)) {
                            mkdir($target, 0777, true); // Create 'student' folder if it doesn't exist
                        }
                        $target_file = $target . basename($_FILES["img"]["name"]);

                        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                            // Update query for the student profile
                            $sql = "UPDATE student SET 
                                    PHO='{$_POST["pno"]}', 
                                    MAIL='{$_POST["mail"]}', 
                                    ADDR='{$_POST["addr"]}', 
                                    SIMG='{$target_file}' 
                                    WHERE ID={$_SESSION["ID"]}";
                            $db->query($sql);
                            echo "<div class='success'>Profile Updated Successfully</div>";
                        } else {
                            echo "<div class='error'>Failed to upload image</div>";
                        }
                    }
                ?>
                    <form enctype="multipart/form-data" role="form" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                        <label>Phone No</label><br>
                        <input type="text" maxlength="10" required class="input3" name="pno"><br><br>
                        <label>E - Mail</label><br>
                        <input type="email" class="input3" required name="mail"><br><br>
                        <label>Address</label><br>
                        <textarea rows="5" name="addr"></textarea><br><br>
                        <label>Image</label><br>
                        <input type="file" class="input3" required name="img"><br><br>
                        <button type="submit" class="btn" name="submit">Add Profile Details</button>
                    </form>
                </div>
                <div class="rbox1">
                    <h3>Profile</h3><br>
                    <table border="1px">
                        <tr><td colspan="2"><img src="<?php echo $row["SIMG"]; ?>" height="100" width="100" alt="Upload Pending"></td></tr>
                        <tr><th>Name</th> <td><?php echo $row["NAME"]; ?></td></tr>
                        <tr><th>Registration no.</th> <td><?php echo $row["RNO"]; ?></td></tr>
                        <tr><th>Date of Birth</th> <td><?php echo $row["DOB"]; ?></td></tr>
                        <tr><th>Father's Name</th> <td><?php echo $row["FNAME"]; ?></td></tr>
                        <tr><th>Phone No</th> <td><?php echo $row["PHO"]; ?></td></tr>
                        <tr><th>E - Mail</th> <td><?php echo $row["MAIL"]; ?></td></tr>
                        <tr><th>Address</th> <td><?php echo $row["ADDR"]; ?></td></tr>
                        <tr><th>Class</th> <td><?php echo $row["SCLASS"]; ?></td></tr>
                        <tr><th>Section</th> <td><?php echo $row["SSEC"]; ?></td></tr>
                    </table>
                </div>
            </div>
        </div>
        <?php include "footer.php"; ?>
    </body>
</html>