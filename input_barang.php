<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Barang</title>
    <style>
    body {
  font-family: sans-serif;
  margin: 2rem;
}

h1 {
  text-align: center;
  font-size: 1.5rem;
  margin-bottom: 1rem;
}

form {
  display: flex;
  flex-direction: column;
  width: 400px;
  margin: 0 auto;
  padding: 1rem;
  border: 1px solid #ccc;
  border-radius: 5px;
}

label {
  display: block;
  margin-bottom: 5px;
  color: #555;
  text-align: left;
}

input[type="text"],
input[type="number"] {
  width: 100%-40%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

button {
  margin-top: 1rem;
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button[type="ulangi"] {
  background-color: lightgray;
  margin-left: 10px;
}

a {
  color: #007bff;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}
</style>
</head>
<body>
    <h1>Tambah Data Barang</h1>
    <form action="proses.php" method="post">
        <label for="No">no:</label>
        <input type="text" id="No" name="No" required><br><br>
        <label for="nama_merek">Nama Merek:</label>
        <input type="text" id="nama_merek" name="nama_merek" required><br><br>
        <label for="warna">Warna:</label>
        <input type="text" id="warna" name="warna" required><br><br>
        <label for="jumlah">Jumlah:</label>
        <input type="number" id="jumlah" name="jumlah" required><br><br>
        <button type="submit">Simpan</button>
        <button type="ulangi">ulangi</button>
    </form>
    <p><a href="hasil.php">Lihat Daftar Barang</a></p>
</body>
</html>
