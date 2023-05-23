<?php
session_start();

if(isset($_GET['del'])){
    unset($_SESSION['history'][$_GET['del']]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Riwayat perhitungan kalkulator</title>
</head>
<body>
    <div>
        <div>
        <header>
        <h1>Riwayat Perhitungan</h1>
        <a href="calculator.php">&laquo; Kembali ke Kalkulator</a>
    </header>
    <table>
        <?php foreach($_SESSION['history'] as $idx => $data): ?>
            <tr>
                <td><?=$data[0]?></td>
                <td><?=$data[2]?></td>
                <td><?=$data[1]?></td>
                <th><?=$data[3]?></th>
                <td>
                    <a href="history.php?del=<?=$idx?>"> x </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </div>
    </div>
    </table>
</body>
</html>