<?php
include 'db.php';

if (isset($_POST['save'])) {
    mysqli_query($conn, "INSERT INTO students
    (name, roll_no, course, department, year, email, phone)
    VALUES
    ('$_POST[name]','$_POST[roll_no]','$_POST[course]',
     '$_POST[department]','$_POST[year]','$_POST[email]','$_POST[phone]')");

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
    <h2 class="text-xl font-bold mb-4">Add Student</h2>

    <input name="name" placeholder="Name" class="w-full p-2 border mb-2">
    <input name="roll_no" placeholder="Roll No" class="w-full p-2 border mb-2">
    <input name="course" placeholder="Course" class="w-full p-2 border mb-2">
    <input name="department" placeholder="Department" class="w-full p-2 border mb-2">
    <input name="year" placeholder="Year" class="w-full p-2 border mb-2">
    <input name="email" placeholder="Email" class="w-full p-2 border mb-2">
    <input name="phone" placeholder="Phone" class="w-full p-2 border mb-2">

    <button name="save" class="bg-green-500 text-white px-4 py-2 rounded">
        Save
    </button>
</form>

</body>
</html>
