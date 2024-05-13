<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor Dashboard</title>
    <link rel="stylesheet" href="css/dashboard-styles.css" />
</head>

<body>
    <?php require('logout.html') ?>
    <center>
        <h2>Welcome, <?= $_SESSION['user']['name'] ?></h2>
        <table cellpadding="5">
            <tr align="center">
                <td>
                    <a href="job-list.php">
                        <button>Job List</button>
                    </a>
                </td>
            </tr>
            <tr align="center">
                <td>
                    <a href="view-applied-job.php">
                        <button>Applied Job List</button>
                    </a>
                </td>
            </tr>
            <tr align="center">
                <td>
                    <a href="batch-list.php">
                        <button>Batch List</button>
                    </a>
                </td>
            </tr>
            <tr align="center">
                <td>
                    <a href="search-student.php">
                        <button>Search Student</button>
                    </a>
                </td>
            </tr>
        </table>
        <br><br><br><button onclick="history.back ()">Back</button>
    </center>
</body>

</html>