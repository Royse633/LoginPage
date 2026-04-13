<?php include "db1.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>

<h2>Add Student</h2>

<form method="POST">
    Name: <input type="text" name="name"><br><br>
    Course: <input type="text" name="course"><br><br>
    <button type="submit" name="save">Save</button>
</form>

<?php
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $course = $_POST['course'];

    $sql = "INSERT INTO student(name, course) 
            VALUES ('$name', '$course')";

    mysqli_query($conn, $sql);

    header("Location: index.php");
}
?>

</body>
</html>