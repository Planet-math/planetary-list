<?php
    include("includes/head.php");

    $error = "";
    $message = "";

    if (array_key_exists('name', $_POST))
    {
        $sql = "SELECT name FROM planets WHERE `name` = '" . $_POST['name'] . "'";
        $result = $db->query($sql);

        if ($result->num_rows > 0)
        {
            $error = "Planet already exists in DB";
        }

        $sql = "INSERT INTO planets SET
            `name` = '" . $_POST['name'] . "',
            `close_distance` = '" . $_POST['close-dis'] . "',
            `far_distance` = '" . $_POST['far-dis'] . "',
            `far_distance` = '" . $_POST['av-dis'] . "',
            `orbital_speed` = '" . $_POST['av-orbit-speed'] . "'
        ";

        if (!$error)
        {
            if ($db->query($sql) === TRUE)
            {
                $message = "Planet added to database";
            } else {
                $error = "Failed to add planet to DB: " . $db->error;
            }
        }

    }
?>

<h1>Add Planet</h1> 

<?php
    if ($error)
    {
        echo "<div class='error'><h2>ERROR</h2>" . $error . "</div>";
    }
    if ($message)
    {
        echo "<div class='message'>" . $message . "</div>";
    }
?>

<form action="./planetmaker.php" method="post">
    <label for="name">Name:</label> <input type="text" id="name" name="name" required><br>
    <label for="av-dis">average distance:</label> <input type="text" id="av-dis" name="av-dis" placeholder="million miles" required><br>
    <label for="close-dis">closest distance:</label> <input type="text" id="close-dis" name="close-dis" placeholder="million miles"  required><br>
    <label for="far-dis">farthest distance:</label> <input type="text" id="far-dis" name="far-dis" placeholder="million miles" required><br>
    <label for="av-orbit-speed">avrage orbital speed:</label> <input type="text" id="av-orbit-speed" name="av-orbit-speed" placeholder="mi/s"><br>
    <input type="submit" class="submit-button" value="Add Planet"  ><br>
</form>




<?php
    include("includes/foot.php");
?>