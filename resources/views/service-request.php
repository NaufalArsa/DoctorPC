<?php
include("../../app/Controller.php");

$controller = new Controller();
$dataReq = $controller->showrequest();
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
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addRequestModal">
            Tambah Request
        </button>
        <form class="form-inline">
            <div class="form-group">
                <input type="text" class="form-control" id="search" placeholder="Masukan Nama">
            </div>
            <button type="button" class="btn btn-default" id="searchBtn">Search</button>
        </form>
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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($dataReq as $row) {
                        echo "<tr>";
                        echo "<td>{$row['ID_SERVICE']}</td>";
                        echo "<td>{$row['NAMA_PELANGGAN']}</td>";
                        echo "<td>{$row['KONTAK_PELANGGAN']}</td>";
                        echo "<td>{$row['MERK_DEVICE']}</td>";
                        echo "<td>{$row['STATUS_SERVICE']}</td>";
                        echo "<td>{$row['DESKRIPSI']}</td>";
                        echo "<td>{$row['ID_MECHANIC']}</td>";
                        echo "<td><button class='btn btn-danger btn-sm' onclick='deleteService({$row['ID_SERVICE']})'>Delete</button></td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="addRequestModal" tabindex="-1" role="dialog" aria-labelledby="addRequestModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form tambah request -->
                <form id="addRequestForm">
                    <div class="form-group">
                        <label for="namaPelanggan">Nama Pelanggan:</label>
                        <input type="text" class="form-control" id="namaPelanggan" name="namaPelanggan" required>
                    </div>
                    <div class="form-group">
                        <label for="kontakPelanggan">Kontak Pelanggan:</label>
                        <input type="text" class="form-control" id="kontakPelanggan" name="kontakPelanggan" required>
                    </div>
                    <div class="form-group">
                        <label for="merkDevice">Merk Device:</label>
                        <input type="text" class="form-control" id="merkDevice" name="merkDevice" required>
                    </div>
                    <div class="form-group">
                        <label for="statusService">Status Service:</label>
                        <input type="text" class="form-control" id="statusService" name="statusService" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi:</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="idMechanic">ID Mechanic:</label>
                        <input type="text" class="form-control" id="idMechanic" name="idMechanic" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Request</button>
                </form>
            </div>
        </div>
    </div>
</div>
    <script>
    $(document).ready(function() {
        // Handle search button click event
        $("#searchBtn").click(function() {
            var searchText = $("#search").val().toLowerCase();

            // Loop through each row in the table and hide/show based on the search text
            $("tbody tr").each(function() {
                var rowText = $(this).text().toLowerCase();
                if (rowText.includes(searchText)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
        $("#addRequestForm").submit(function(event) {
        event.preventDefault();

        // Mengambil data dari form
        var formData = {
            action: 'addRequest',
            namaPelanggan: $("#namaPelanggan").val(),
            kontakPelanggan: $("#kontakPelanggan").val(),
            merkDevice: $("#merkDevice").val(),
            statusService: $("#statusService").val(),
            deskripsi: $("#deskripsi").val(),
            idMechanic: $("#idMechanic").val()
        };

        // Melakukan AJAX request
        $.ajax({
            type: 'POST',
            url: '../../app/Controller.php',
            data: formData,
            success: function(response) {
                // Reload halaman atau perbarui tabel setelah berhasil
                location.reload();
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert('An error occurred while adding the request.');
            }
        });
    });
});
    function deleteService(serviceId) {
        if (confirm('Are you sure you want to delete this service?')) {
            $.ajax({
                type: 'POST',
                url: '../../app/Controller.php', // Replace with the actual path to your controller
                data: { action: 'deleteService', serviceId: serviceId },
                success: function (response) {
                    // Reload the page or update the table as needed
                    location.reload();
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                    alert('An error occurred while deleting the service.');
                }
            });
        }
    }
    
    </script>
</body>

</html>

<?php
?>