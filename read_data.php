<?php
include 'dbConnect.php'; // Include your dbConnect class

$db = new dbConnect(); // Create an instance of your dbConnect class
$users = $db->getUsers(); // Fetch users using the getUsers method
?>

<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h2 {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>
    <?php if (!empty($users)): ?>
        <h2>User List</h2>
        <table>
            <tr>
                <th>Username</th>
                <th>Email</th>
            </tr>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo htmlspecialchars($user['username']); ?></td>
                    <td><?php echo htmlspecialchars($user['email']); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <h2>No users found.</h2>
    <?php endif; ?>
</body>
</html>
