<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="edit.css">
</head>
<body>
    <center><h1>Selamat Datang di Hotel Kami</h1>
    <table border="1" width="80%"><tr>
        <th bgcolor="aqua">Nama</th>
        <th bgcolor="aqua">Alamat</th>
        <th bgcolor="aqua">No_kamar</th>
    </tr>

    <?php
    include'connect.php';

    $query = "SELECT* FROM kamar ";
    $sql = mysqli_query($connect,$query);
    while($data = mysqli_fetch_array($sql)){
        echo "<tr>";
        echo "<td>.$data['Nama'].</td>";
        echo "<td>.$data['Alamat'].</td>";
        echo "<td>.$data['No_kamar'].</td>";
        echo "</td>";
        
    }
    ?>
    <tr>
            <td><a href="logout.php">logout</a></td>
        </tr>
</body>
</html>