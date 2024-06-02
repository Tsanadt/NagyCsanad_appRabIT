<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users</title>
    <link rel="stylesheet" href="style.css">
    <!--The style.css can't be connected to the page for unknown reasons, so I had to make a style tag here.-->
    <style>
        body{
            background-color: cadetblue;
            font-family: Arial;
            font-weight: bold;
            display: flex;
            justify-content: center;
            flex-direction: column;
        }
        a{
            text-decoration: none;
        }
        .block{
            background-color: darkgrey;
            padding: 15pt;
            border: 5pt solid black;
            border-radius: 5pt;
            width: 120pt;
            text-align: center;
        }
    </style>
</head>
<body>
<?php
foreach ($data['users'] as $user) {
    echo '<p class="block">'.$user->name."</p><br>";
}
?>
</body>
</html>