<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3e5f5; 
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #6a1b9a; 
            font-size: 36px;
            font-weight: bold;
        }
        p {
            font-size: 18px;
            line-height: 1.8;
            color: #555;
            margin: 10px 0;
        }
        strong {
            color: #6a1b9a;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
        // Data pribadi
        $nama = "Nadiyah Julianty Andrani";
        $umur = 17;
        $tanggallahir = "01 July 2007";
        $hobi = "Mendengarkan musik, memasak,dan menonton";
        $profesi = "pelajar di smkn 4 padalarang";
        $deskripsi = ".";

    
        echo "<h1>About Me</h1>";
        echo "<p><strong>Nama:</strong> $nama</p>";
        echo "<p><strong>Umur:</strong> $umur tahun</p>";
        echo "<p><strong>Tanggal Lahir:</strong> $tanggallahir</p>";
        echo "<p><strong>Profesi:</strong> $hobi</p>";
        echo "<p><strong>Hobi:</strong> $profesi</p>";
        echo "<p>$deskripsi</p>";
    ?>
</div>

</body>
</html>
