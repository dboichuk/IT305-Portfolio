<?php
require ("db.php");
require ('check-login.php');

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Admin</title>
</head>
<body>
<div class="container">
<h3>Student Summary</h3>

<table id="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Job Title</th>
        <th>Company</th>
        <th>LinkedIn</th>
        <th>Email</th>
        <th>How We Met</th>
        <th>Other</th>
        <th>Message</th>
        <th>Mailing List</th>
        <th>Email Format</th>
        <th>Datestamp</th>
    </tr>
    </thead>

    <?php

    //Define a query
    $sql = "SELECT * FROM guestbook";

    //Send the query to the db
    $result = mysqli_query($cnxn, $sql);


    //Process the result
    foreach ($result as $row) {


        $id = $row['id'];
        $first = $row['firstName'];
        $last = $row['lastName'];
        $job = $row['jobTitle'];
        $company = $row['company'];
        $url=$row['linkedIn'];
        $email=$row['email'];
        $howWeMet=$row['howWeMet'];
        $other=$row['other'];
        $message=$row['message'];
        $mailingList=$row['mailingList'];
        $emailFormat=$row['emailFormat'];
        $datestamp=$row['datestamp'];

        echo "<tr>
                    <td>$id</td>
                    <td>$first $last</td>
                    <td>$job</td>
                    <td>$company</td>
                    <td>$url</td>
                    <td>$email</td>
                    <td>$howWeMet</td>
                    <td>$other</td>
                    <td>$message</td>
                    <td>$mailingList</td>
                    <td>$emailFormat</td>
                    <td>$datestamp</td>
                    
                  </tr>";
    }

    ?>
</table>
    <h4></h4><a href="guestbook.html">GuestBook</a></h4>
    <h4></h4><a href="logout.php">Logout</a></h4>


</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script>
    $('#table').DataTable();
</script>
</body>
</html>
