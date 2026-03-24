<?php
    include "database.php";
    session_start();
    if (!isset($_SESSION["AID"])) {
        echo "<script>window.open('index.php?mes=Access Denied..','_self');</script>";
        exit;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>System Activity Report</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 30px; }
        h2 { text-align: center; margin-bottom: 40px; }
        h3 { margin-top: 40px; border-bottom: 1px solid #ccc; padding-bottom: 5px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #ddd; padding: 8px; font-size: 14px; }
        th { background-color: #f2f2f2; }
        @media print {
            button { display: none; }
        }
    </style>
</head>
<body>

    <h2>System Activity Summary Report</h2>
    <button onclick="window.print()">🖨️ Print</button>

    <!-- Students -->
    <h3>Students</h3>
    <table>
        <tr><th>Reg No</th><th>Name</th><th>Class</th><th>Section</th></tr>
        <?php
        $res = $db->query("SELECT RNO, NAME, SCLASS, SSEC FROM student");
        while ($row = $res->fetch_assoc()) {
            echo "<tr><td>{$row['RNO']}</td><td>{$row['NAME']}</td><td>{$row['SCLASS']}</td><td>{$row['SSEC']}</td></tr>";
        }
        ?>
    </table>

    <!-- Staff -->
    <h3>Staff</h3>
    <table>
        <tr><th>Name</th><th>Qualification</th><th>Email</th><th>Phone</th></tr>
        <?php
        $res = $db->query("SELECT TNAME, QUAL, MAIL, PNO FROM staff");
        while ($row = $res->fetch_assoc()) {
            echo "<tr><td>{$row['TNAME']}</td><td>{$row['QUAL']}</td><td>{$row['MAIL']}</td><td>{$row['PNO']}</td></tr>";
        }
        ?>
    </table>

    <!-- Exams -->
    <h3>Exams</h3>
    <table>
        <tr><th>Exam Name</th><th>Type</th><th>Date</th><th>Class</th><th>Subject</th></tr>
        <?php
        $res = $db->query("SELECT ENAME, ETYPE, EDATE, CLASS, SUB FROM exam");
        while ($row = $res->fetch_assoc()) {
            echo "<tr><td>{$row['ENAME']}</td><td>{$row['ETYPE']}</td><td>{$row['EDATE']}</td><td>{$row['CLASS']}</td><td>{$row['SUB']}</td></tr>";
        }
        ?>
    </table>

    <!-- Notices -->
    <h3>Notices</h3>
    <table>
        <tr><th>Message</th></tr>
        <?php
        $res = $db->query("SELECT message FROM notice");
        while ($row = $res->fetch_assoc()) {
            echo "<tr><td>{$row['message']}</td></tr>";
        }
        ?>
    </table>

    <!-- Applications -->
    <h3>Applications</h3>
    <table>
        <tr><th>Application Name</th><th>Student Reg No</th></tr>
        <?php
        $res = $db->query("SELECT apname, apreg FROM application");
        while ($row = $res->fetch_assoc()) {
            echo "<tr><td>{$row['apname']}</td><td>{$row['apreg']}</td></tr>";
        }
        ?>
    </table>

</body>
</html>
