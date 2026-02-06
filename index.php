<?php
include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM students ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

<div class="max-w-6xl mx-auto bg-white border border-gray-300">

    <!-- Header -->
    <div class="flex justify-between items-center px-6 py-4 border-b bg-gray-50">
        <h1 class="text-xl font-semibold text-gray-800">
            Student Management System
        </h1>

        <a href="create.php"
           class="bg-gray-800 text-white px-4 py-2 text-sm rounded hover:bg-gray-700">
            Add Student
        </a>
    </div>

    <!-- Table -->
    <div class="p-4">
        <table class="w-full border-collapse text-sm">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="border px-3 py-2">ID</th>
                    <th class="border px-3 py-2">Name</th>
                    <th class="border px-3 py-2">Roll No</th>
                    <th class="border px-3 py-2">Course</th>
                    <th class="border px-3 py-2">Dept</th>
                    <th class="border px-3 py-2">Year</th>
                    <th class="border px-3 py-2">Email</th>
                    <th class="border px-3 py-2">Phone</th>
                    <th class="border px-3 py-2">Action</th>
                </tr>
            </thead>

            <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr class="hover:bg-gray-100">
                    <td class="border px-3 py-2 text-center"><?= $row['id'] ?></td>
                    <td class="border px-3 py-2"><?= $row['name'] ?></td>
                    <td class="border px-3 py-2"><?= $row['roll_no'] ?></td>
                    <td class="border px-3 py-2"><?= $row['course'] ?></td>
                    <td class="border px-3 py-2"><?= $row['department'] ?></td>
                    <td class="border px-3 py-2 text-center"><?= $row['year'] ?></td>
                    <td class="border px-3 py-2"><?= $row['email'] ?></td>
                    <td class="border px-3 py-2"><?= $row['phone'] ?></td>


<td class="border px-3 py-2 text-center">
    <a href="edit.php?id=<?= $row['id'] ?>"
       class="inline-block px-3 py-1 border border-blue-600 text-blue-600 text-sm mr-2 hover:bg-blue-100">
        Edit
    </a>

    <a href="delete.php?id=<?= $row['id'] ?>"
       onclick="return confirm('Delete student?')"
       class="inline-block px-3 py-1 border border-red-600 text-red-600 text-sm hover:bg-red-100">
        Delete
    </a>
</td>


        <?php } ?>
    </table>
</div>

</body>
</html>
