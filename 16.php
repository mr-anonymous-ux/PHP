<!DOCTYPE html>
<html>
<head>
    <title>Matrix Addition</title>
    <script>
        function createMatrix() {
            var row = document.getElementById('ar').value;
            var col = document.getElementById('ac').value;

            if (!row || !col) {
                alert("Please enter the number of rows and columns.");
                return false;
            }

            var htmlA = "<h3>Enter Matrix A:</h3><table border='1'>";
            for (var i = 0; i < row; i++) {
                htmlA += "<tr>";
                for (var j = 0; j < col; j++) {
                    htmlA += "<td><input type='text' name='amatrix[" + i + "][" + j + "]'></td>";
                }
                htmlA += "</tr>";
            }
            htmlA += "</table>";
            document.getElementById("matrixA").innerHTML = htmlA;

            var htmlB = "<h3>Enter Matrix B:</h3><table border='1'>";
            for (var i = 0; i < row; i++) {
                htmlB += "<tr>";
                for (var j = 0; j < col; j++) {
                    htmlB += "<td><input type='text' name='bmatrix[" + i + "][" + j + "]'></td>";
                }
                htmlB += "</tr>";
            }
            htmlB += "</table>";
            document.getElementById("matrixB").innerHTML = htmlB;
        }
    </script>
</head>
<body>
    <h2>Matrix Addition</h2>
    <form name="form1" method="POST" action="" onsubmit="return checkMatrix()">
        <label>Rows: <input type="number" name="ar" id="ar"></label>
        <label>Columns: <input type="number" name="ac" id="ac"></label>
        <input type="button" name="create" value="Create Matrices" onclick="createMatrix()">
        
        <div id="matrixA"></div>
        <div id="matrixB"></div>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
        error_reporting(0);

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
            $ar = $_POST['ar'];
            $ac = $_POST['ac'];
            $amatrix = $_POST['amatrix'];
            $bmatrix = $_POST['bmatrix'];

            if (!is_array($amatrix) || !is_array($bmatrix)) {
                echo "Please create matrices first.";
                exit;
            }

            echo "<h3>Resultant Matrix:</h3><table border='1'>";
            for ($m = 0; $m < $ar; $m++) {
                echo "<tr>";
                for ($n = 0; $n < $ac; $n++) {
                    $cmatrix[$m][$n] = $amatrix[$m][$n] + $bmatrix[$m][$n];
                    echo "<td>" . $cmatrix[$m][$n] . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    ?>
</body>
</html>