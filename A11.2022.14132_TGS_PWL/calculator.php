<?php
include "functions.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operator = $_POST['operator'];
    $hasil = hitung($angka1, $angka2, $operator);
    add_session_hist($angka1, $angka2, $operator, $hasil);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Kalkulator</title>
</head>
<body>
    <div>
        <div class="container">
            <div>
                <center><h3>Layla Calculator
                <p><a href="" class="cl"></a></p>
                    <a href="history.php">Lihat riwayat &raquo;</a>
                </h3></center>
                <form action="" method="post">
                    <center><table>
                        <tr>
                            <th>Angka 1</th>
                            <th>Opr</th>
                            <th>Angka 2</th>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="angka1">
                            </td>
                            <td>
                                <select name="operator">
                                    <option value="+"> + </option>
                                    <option value="-"> - </option>
                                    <option value="x"> x </option>
                                    <option value="/"> / </option>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="angka2">
                            </td>
                        </tr>
                        <div class="pembungkuscard">
                        <tr>
                            <td colspan="3"><input type="submit" value=HITUNG></td>
                        </tr>
                        </div>
                    </table></center>
                </form>
            </div>
        </div>
    </div>
</body>
</html>