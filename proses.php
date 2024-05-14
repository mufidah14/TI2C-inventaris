<?php
// Include database connection file
require_once 'koneksi.php';

// Get form data
$no = $_POST['No'];
$nama_merek = $_POST['nama_merek'];
$warna = $_POST['warna'];
$jumlah = $_POST['jumlah'];

// Prepare SQL statement for creating table
$table_sql = "CREATE TABLE IF NOT EXISTS barang (
  no INT(11) NOT NULL AUTO_INCREMENT,
  nama_merek VARCHAR(255) NOT NULL,
  warna VARCHAR(255) NOT NULL,
  jumlah INT(11) NOT NULL,
  PRIMARY KEY (no)
)";

// Execute query for creating table
if (!$conn->query($table_sql)) {
  echo "Error creating table: " . $conn->error;
  exit;
}

// Prepare SQL statement for inserting data
$sql = "INSERT INTO barang (no, nama_merek, warna, jumlah) VALUES (?, ?, ?, ?)";

// Prepare statement
$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("issi", $no, $nama_merek, $warna, $jumlah);

// Execute query
$stmt->execute();

// Close statement
$stmt->close();

// Close connection
$conn->close();

// Redirect to list page
header('Location: hasil.php');
exit;
?>