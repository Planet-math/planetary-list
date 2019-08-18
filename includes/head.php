<?php
    $bgcolor = "#17202A";
    $textcolor = "#EAEDED";
    $alttext = "#000";
    $accentcolor = "#76D7C4";
    $useTitle = (isset($title)) ? $title : "Planets UNKOWN Page";

    $dbname = "planets";
    $dbuser = "planets";
    $dbpass = "m4q5O2cnC0e98Yxy";
    $dbserver = "localhost";

    $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

    if ($db->connect_error) {
        die("Dabase Connection Failed: " . $db->connect_error);
    } 
    

    /*
    if (isset($title))
    {
        $useTitle = $title;
    } else {
        $title = "Planets UNKOWN Page";
    }
    */
?>

<html>
<head>
    <title><?php echo $useTitle ?></title>
    <style>
        body {
            background-color: <?php echo $bgcolor ?>;
            color: <?php echo $textcolor ?>;
        }

        h1 {
            color: <?php echo $accentcolor ?>;
        }

        a {
            color: <?php echo $accentcolor ?>;
            text-decoration: underline;
        }

        a:hover {
            font-weight: bold;
            color: <?php echo $textcolor ?>;0
        }

        label {
            display: inline-block;
            width: 150px;
            margin-top: 5px;
        }

        .submit-button {
            background-color: <?php echo $accentcolor ?>;
            color: <?php echo $alttext ?>;
            border: none;
            padding: 7px;
            text-decoration: none;
            text-align: center;
            display: inline-block;
            font-size: 1.1em;
            font-weight: bold;
            border-radius: 50px;
            margin: 7px;
        }

        .error {
            color: #B03A2E;
            font-size: 1.1em;
            border-style: solid;
            border-width: 2px;
            border-color: #B03A2E;
            background-color: rgba(176, 58, 46, .3);
            width: 500px;
            padding: 10px;
            margin-bottom: 15px;
        }

        .error h2 {
            margin: 0;
            margin-bottom: 4px;
        }

        .message {
            color: #A9DFBF;
            font-size: 1.1em;
        }
    </style>
</head>
<body>