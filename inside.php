<?php
// Function to validate user credentials
function validateCredentials($username, $password)
{
    $users = file("users.txt", FILE_IGNORE_NEW_LINES);
    foreach ($users as $user) {
        list($storedUsername, $storedPassword) = explode(",", $user);
        if ($username === $storedUsername && $password === $storedPassword) {
            return true;
        }
    }
    return false;
}
?>
<html>

<head>
    <title>Secured Page</title>
</head>

<body>
    <?php
    if (isset($_POST["new_value"])) {
        echo "<h1>Value Updated!</h1>";
    } else {
        echo "<h1>Welcome, Admin!</h1>";
        echo "<p>Enter a value to update for all users:</p>";
    }
    ?>

    <form method="post" id="updateForm">
        <select id="options" name="option">
            <option value="deshawar">Deshawar</option>
            <option value="ghaziabad">Ghaziabad</option>
            <option value="faridabad">Faridabad</option>
            <option value="gali">Gali</option>
            <option value="bollywood">Bollywood</option>
        </select>

        <br>
        <input type="number" size="2" name="num">
        <input type="submit" value="Update" onclick="updation();">

    </form>
    <p>Go to Index</p><a href="index.php">Main Page</a>
    <script src="admin_script.js"></script>

</body>

</html>