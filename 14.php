<html>
<body>
    <form name="prime" method="POST">
        Number: <input type="text" name="n" required>
        <input type="submit" name="submit" value="Check">
    </form>
</body>
</html>

<?php
if(isset($_POST['n'])) {
    $check = 0;
    $n = $_POST['n'];
    
    if ($n <= 1) {
        echo "$n is not prime";
    } else {
        for ($i = 2; $i <= ($n / 2); $i++) {
            if ($n % $i == 0) {
                $check = 1;
                break;
            }
        }
    
        if ($check == 0) {
            echo "$n is prime";
        } else {
            echo "$n is not prime";
        }
    }
}
?>

