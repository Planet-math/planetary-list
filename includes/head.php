<?php
    $bgcolor = "#000";
    $textcolor = "#fff";
    $useTitle = (isset($title)) ? $title : "Planets UNKOWN Page";

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
    </style>
</head>
<body>