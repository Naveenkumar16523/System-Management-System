<?php
include 'db.php';
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM students WHERE id=$id"));

if (isset($_POST['update'])) {
    mysqli_query($conn, "UPDATE students SET
    name='$_POST[name]',
    roll_no='$_POST[roll_no]',
    course='$_POST[course]',
    department='$_POST[department]',
    year='$_POST[year]',
    email='$_POST[email]',
    phone='$_POST[phone]'
    WHERE id=$id");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

<form method="POST" class="bg-white p-6 max-w-lg mx-auto rounded-xl shadow">
    <h2 class="text-xl font-bold mb-4">Edit Student</h2>

    <input name="name" value="<?= $data['name'] ?>" class="w-full p-2 border mb-2">
    <input name="roll_no" value="<?= $data['roll_no'] ?>" class="w-full p-2 border mb-2">
    <input name="course" value="<?= $data['course'] ?>" class="w-full p-2 border mb-2">
    <input name="department" value="<?= $data['department'] ?>" class="w-full p-2 border mb-2">
    <input name="year" value="<?= $data['year'] ?>" class="w-full p-2 border mb-2">
    <input name="email" value="<?= $data['email'] ?>" class="w-full p-2 border mb-2">
    <input name="phone" value="<?= $data['phone'] ?>" class="w-full p-2 border mb-2">

    <button name="update" class="bg-blue-500 text-white px-4 py-2 rounded">
        Update
    </button>
</form>

</body>
</html>
