<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <title>Info</title>
</head>

<body>
    <div class="mb-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Comment</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">
                        <?php echo $_POST["name"]; ?>
                    </th>
                    <th scope="row">
                        <?php echo $_POST["email"]; ?>
                    </th>
                    <th scope="row">
                        <?php echo $_POST["subject"]; ?>
                    </th>
                    <th scope="row">
                        <?php echo $_POST["comment"]; ?>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>


</html>