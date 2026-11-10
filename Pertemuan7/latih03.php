<?php
  // transaksi penjualan produk
  $namaproduk = "Baju enak di tidurin";
  $harga_satuan = 250000;
  $qty = 5;

  // hitung harga yang harus di bayar
  $total_bayar = $harga_satuan * $qty;

  echo "Nama Produk: " . $namaproduk . "<br>";
  echo "Harga Satuan: Rp " . number_format($harga_satuan, 0, ',', '.') . "<br>";
  echo "Jumlah: " . $qty . "<br>";
  echo "Harga yang harus dibayar: Rp " . number_format($total_bayar, 0, ',', '.') . "<br>";

  // terdapat diskon 5% jika Sub total bayar lebih dari 500.000
  if ($total_bayar > 500000) {
    $diskon = 5;
    $jumlah_diskon = $total_bayar * ($diskon / 100);
    $total_bayar -= $jumlah_diskon;
    echo "Diskon: Rp " . number_format($jumlah_diskon, 0, ',', '.') . "<br>";
  }

  echo "Harga yang harus dibayar setelah diskon: Rp " . number_format($total_bayar, 0, ',', '.') . "<br>";
?>
