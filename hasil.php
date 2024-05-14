<!DOCTYPE html>
<html>
<head>
    <title>Data Barang</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            background-color: #BACD92;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh; 
        }
        header {
            background-color: #FCFFE0;
            color: black;
            padding: 20px;
            font-size: 24px;
            text-align: center; 
        }
        .container {
            max-width: 800px; 
            margin: 20px auto; 
            border-radius: 8px;
            overflow-x: auto; 
        }
        table {
            width: 100%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #75A47F;
            color: floralwhite;
        }
        tr:hover {
            background-color: #F5DAD2;
        }
        .edit-link {
            color: violet;
            text-decoration: underline;
            cursor: pointer;
        }
        .edit-link:hover {
            color: violet;
        }
    </style>
</head>
<body>

<header>Data Barang</header> 

<div class="container">
    <?php
        // Connect to database
        include 'koneksi.php';

        // Fetch data from database
        $sql = "SELECT * FROM barang";
        $result = $conn->query($sql);

        // Display data in table
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>No</th><th>Nama Merek</th><th>Warna</th><th>Jumlah</th></tr>";

            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["no"] . "</td>";
                echo "<td>" . $row["nama_merek"] . "</td>";
                echo "<td>" . $row["warna"] . "</td>";
                echo "<td>" . $row["jumlah"] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "0 results";
        }

        // Close database connection
        $conn->close();
    ?>
</div>

<div style="text-align: center; margin-top: 20px;">
    <button onclick="window.location.href='input_barang.php';">Kembali ke Menu Utama</button>
</div>

</body>
</html>