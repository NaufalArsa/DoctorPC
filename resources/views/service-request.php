<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Service Request</title>
</head>

<body>
    <div class="container">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                <th>ID Service</th>
                <th>Nama Pelanggan</th>
                <th>Kontak Pelanggan</th>
                <th>Merk Device</th>
                <th>Status Device</th>
                <th>Deskripsi</th>
                <th>ID Mechanic</th>
                </tr>
            </thead>
            <tbody>
            <?php
                // Check if $dataReq is set and not empty before using foreach
                    // Loop through each row of data and display it in the table
                    foreach ($dataReq as $row) {
                        echo "<tr>";
                        echo "<td>{$row['ID_SERVICE']}</td>";
                        echo "<td>{$row['NAMA_PELANGGAN']}</td>";
                        echo "<td>{$row['KONTAK_PELANGGAN']}</td>";
                        echo "<td>{$row['MERK_DEVICE']}</td>";
                        echo "<td>{$row['STATUS_SERVICE']}</td>";
                        echo "<td>{$row['DESKRIPSI']}</td>";
                        echo "<td>{$row['ID_MECHANIC']}</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>

<?php
?>
