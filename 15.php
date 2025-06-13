<html>
<body>
    <form method="POST" action="">
        Enter a string: <input type="text" name="str" required><br><br>
        <input type="submit" value="Submit">
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str = $_POST['str'];
        echo "The string received is: $str";
        echo "<br/>";
        echo "The reverse of $str is: " . strrev($str);
        echo "<br/>";
        echo "The lowercase of $str is: " . strtolower($str);
    }
?>
</body>
</html>