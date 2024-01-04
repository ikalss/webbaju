<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hasil Pencarian Baju</title>
</head>
<body>
  <h1>Hasil Pencarian Baju</h1>
  <?php
  // Data baju dalam bentuk array asosiatif (contoh data statis)
  $daftar_baju = array(
    array("nama" => "Baju A", "harga" => 100000, "warna" => "Merah"),
    array("nama" => "Baju B", "harga" => 80000, "warna" => "Biru"),
    array("nama" => "Baju C", "harga" => 120000, "warna" => "Hijau"),
    // Tambahkan data baju lainnya sesuai kebutuhan
  );

  if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    $results = array();
    
    // Lakukan pencarian dengan membandingkan keyword dengan nama baju dalam array
    foreach ($daftar_baju as $baju) {
      if (stripos($baju['nama'], $keyword) !== false) {
        $results[] = $baju;
      }
    }

    if (!empty($results)) {
      // Tampilkan hasil pencarian
      foreach ($results as $result) {
        echo "Nama Baju: " . $result['nama'] . "<br>";
        echo "Harga: Rp " . number_format($result['harga']) . "<br>";
        echo "Warna: " . $result['warna'] . "<br>";
        // Tampilkan informasi lainnya mengenai baju
        // ...
        echo "<hr>";
      }
    } else {
      echo "Tidak ada hasil yang ditemukan.";
    }
  }
  ?>
</body>
</html>
