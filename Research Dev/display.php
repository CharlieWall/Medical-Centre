<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>International student profile</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<body>
<table style="text-align: center" class="table table-bordered table-hover">
        <tr>
            <td>ID</td>
            <td>Surname</td>
            <td>First Name</td>
            <td>Preferred Name</td>
            <td>Gender</td>
            <td>Home Address</td>
            <td>Phone number</td>
            <td>Date of birth</td>
            <td>Group</td>
            <td>Faculty</td>
            <td>Kin's name</td>
            <td>Relationship of Kin’s</td>
            <td>Kin's phone</td>
        </tr>
        <?php
        header("Content-type:text/html;charset=utf-8");
        $mysqli = mysqli_connect('cmslamp14.aut.ac.nz', 'cfc0597', 'abc12345','cfc0597');
        $mysqli->set_charset('utf8');
        $sql = "select * from onefour";
        $data = mysqli_query($mysqli,$sql);
        while($attr=$data->fetch_row()) {
            echo "<tr><td>{$attr[0]}</td>";
            echo "<td>{$attr[1]}</td>";
            echo "<td>{$attr[2]}</td>";
            echo "<td>{$attr[3]}</td>";
            echo "<td>{$attr[7]}</td>";
            echo "<td>{$attr[18]}" . "{$attr[19]}</td>";
            echo "<td>{$attr[14]} . {$attr[15]}</td>";
            echo "<td>{$attr[6]}</td>";
            echo "<td>{$attr[9]}</td>";
            echo "<td>{$attr[10]}</td>";
            echo "<td>{$attr[28]}</td>";
            echo "<td>{$attr[29]}</td>";
            echo "<td>{$attr[16]}</td></tr>";
        }
        ?>
</table>


<div align="center">
<button onclick="window.location.href='index.html'" style="width:200px;height:60px;font-weight:bold;">Go back to home page</button>
<button onclick="window.location.href='display.php'" style="width:200px;height:60px;font-weight:bold;">Refresh this page</button>
</div>


</body>
</html>