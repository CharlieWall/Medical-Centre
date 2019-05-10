<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>2-4</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<body>
<table style="text-align: center" class="table table-bordered table-hover">
    <tr>
        <td>ID</td>
        <td>Title</td>
        <td>Surname</td>
        <td>Firstname</td>
        <td>Middlename</td>
        <td>Date of birth</td>
        <td>Gender</td>
        <td>Place of birth</td>
        <td>Country of birth</td>
        <td>Address</td>
        <td>postcode</td>
        <td>Phone number</td>
        <td>email</td>
    </tr>
    <?php
    header("Content-type:text/html;charset=utf-8");
    $mysqli = mysqli_connect('cmslamp14.aut.ac.nz', 'cfc0597', 'abc12345','cfc0597');
    $mysqli->set_charset('utf8');
    $sql = "select * from twofour";
    $data = mysqli_query($mysqli,$sql);
    while($attr=$data->fetch_row()) {
        echo "<tr><td>{$attr[0]}</td>";
        echo "<td>{$attr[2]}</td>";
        echo "<td>{$attr[3]}</td>";
        echo "<td>{$attr[4]}</td>";
        echo "<td>{$attr[5]}</td>";
        echo "<td>{$attr[8]} Day " . "{$attr[9]} Month "."{$attr[10]} Year </td>";
        echo "<td>{$attr[11]}</td>";
        echo "<td>{$attr[12]}</td>";
        echo "<td>{$attr[14]}</td>";
        echo "<td>{$attr[18]}"."{$attr[19]}"."{$attr[20]}"."{$attr[21]}</td>";
        echo "<td>{$attr[22]}</td>";
        echo "<td>{$attr[23]}"."{$attr[24]}"."{$attr[25]}</td>";
        echo "<td>{$attr[26]}</td></tr>";
    }
    ?>
</table>
<table style="text-align: center;margin:10% 0 0 0;" class="table table-bordered table-hover">
    <tr>
        <td>ID</td>
        <td>Postal address</td>
        <td>Groups</td>
        <td>Kin’s title</td>
        <td>Kin’s surname</td>
        <td>Kin’s firstname</td>
        <td>Kin’s address</td>
        <td>kin’s phone</td>
        <td>kin’s mobile phone</td>
        <td>Relaionship of kin’s</td>
        <td>Registeration date</td>
    </tr>
    <?php
        header("Content-type:text/html;charset=utf-8");
        $mysqli = mysqli_connect('127.0.0.1', 'root', 'root','html');
        $mysqli->set_charset('utf8');
        $sql = "select * from twofour";
        $data = mysqli_query($mysqli,$sql);
        while($attr=$data->fetch_row()) {
            echo "<tr><td>{$attr[0]}</td>";
            echo "<td>{$attr[30]}</td>";
            echo "<td>{$attr[39]}</td>";
            echo "<td>{$attr[47]}</td>";
            echo "<td>{$attr[48]}</td>";
            echo "<td>{$attr[49]}</td>";
            echo "<td>{$attr[51]}</td>";
            echo "<td>{$attr[52]}</td>";
            echo "<td>{$attr[53]}</td>";
            echo "<td>{$attr[50]}</td>";
            echo "<td>{$attr[57]}</td></tr>";
        }
    ?>
</table>
</body>
</html>