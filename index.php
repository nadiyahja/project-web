<?php
$conn = new mysqli("localhost", "root", "", "pertemuan2nadiyah");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
$sql = "SELECT * FROM notes ORDER BY created_at DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Catatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f3e5f5; 
            font-family: 'Arial', sans-serif;
        }

        .container {
            background-color: #e1bee7; 
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        h2 {
            color: #6a1b9a; 
            text-align: center;
            font-weight: bold;
        }

        .btn-primary {
            background-color: #ce93d8; 
            border-color: #ce93d8;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #ba68c8; 
            border-color: #ba68c8;
        }

        .btn-warning {
            background-color: #f8bbd0; 
            border-color: #f8bbd0;
        }

        .btn-warning:hover {
            background-color: #f48fb1; 
            border-color: #f48fb1;
        }

        .btn-danger {
            background-color: #f06292; 
            border-color: #f06292;
        }

        .btn-danger:hover {
            background-color: #ec407a; 
            border-color: #ec407a;
        }

        table {
            background-color: #ffffff; 
            border-radius: 10px;
            overflow: hidden;
        }

        thead {
            background-color: #ab47bc;
            color: #fff;
        }

        tbody tr:hover {
            background-color: #f3e5f5; 
        }

        td, th {
            text-align: center;
            vertical-align: middle;
        }

       
        table, th, td {
            border: 1px solid #e1bee7;
        }
    </style>
</head>

<body class="p-5">
    <div class="container">
        <h2 class="mb-5">Daftar Catatan</h2>
        <a class="btn btn-primary mb-3" href="pages/create.php">Tambah Catatan Baru</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Isi Catatan</th>
                    <th>Tanggal Dibuat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    $no = 1;
                    // Looping data dari database
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td>" . $row['judul'] . "</td>";
                        echo "<td>" . $row['isi'] . "</td>";
                        echo "<td>" . date('d-m-Y H:i', strtotime($row['created_at'])) . "</td>";
                        echo "<td>";
                        echo "<a class='btn btn-warning btn-sm' href='./pages/edit.php?id=" . $row['id'] . "'>Edit</a> ";
                        echo "<a class='btn btn-danger btn-sm' href='./actions/delete.php?id=" . $row['id'] . "' onclick='return confirm(\"Apakah anda yakin ingin menghapus catatan ini?\");'>Hapus</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Belum ada catatan.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
<?php
$conn->close();
?>
