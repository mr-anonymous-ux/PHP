<?php
$resultHtml = '';
$rows = $_POST['ar'] ?? '';
$cols = $_POST['ac'] ?? '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['amatrix'])) {
    $a = $_POST['amatrix'];
    $b = $_POST['bmatrix'];
    $resultHtml = '<h3>Result:</h3><table border="1" cellpadding="5" style="border-collapse: collapse;">';
    for ($i = 0; $i < $rows; $i++) {
        $resultHtml .= '<tr>';
        for ($j = 0; $j < $cols; $j++) {
            $sum = (int)$a[$i][$j] + (int)$b[$i][$j];
            $resultHtml .= "<td>$sum</td>";
        }
        $resultHtml .= '</tr>';
    }
    $resultHtml .= '</table>';
}
?>
<!DOCTYPE html>
<html>
<head><title>Matrix Addition</title></head>
<body>
<h2>Matrix Addition</h2>
<form method="POST">
    Rows: <input type="text" name="ar" id="ar" value="<?= $rows ?>" style="width:50px;">
    Cols: <input type="text" name="ac" id="ac" value="<?= $cols ?>" style="width:50px;">
    <input type="button" value="Create" onclick="createInputs()">
    <hr>
    <div id="matrixContainer"></div>
</form>
<?= $resultHtml ?>
<script>
function createInputs() {
    const r = document.getElementById('ar').value;
    const c = document.getElementById('ac').value;
    if (!r || !c) return alert("Enter both rows and columns");
    let html = '<h3>Matrix A</h3><table border="1">';
    for (let i = 0; i < r; i++) {
        html += '<tr>';
        for (let j = 0; j < c; j++)
            html += `<td><input name="amatrix[${i}][${j}]" required style="width:50px;"></td>`;
        html += '</tr>';
    }
    html += '</table><h3>Matrix B</h3><table border="1">';
    for (let i = 0; i < r; i++) {
        html += '<tr>';
        for (let j = 0; j < c; j++)
            html += `<td><input name="bmatrix[${i}][${j}]" required style="width:50px;"></td>`;
        html += '</tr>';
    }
    html += '</table><br><input type="submit" value="Add">';
    document.getElementById('matrixContainer').innerHTML = html;
}
window.onload = () => document.getElementById('ar').value && createInputs();
</script>
</body>
</html>
