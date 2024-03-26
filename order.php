<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nasi_goreng = $_POST["nasi_goreng"];
        $mie_goreng = $_POST["mie_goreng"];
        $ayam_goreng = $_POST["ayam_goreng"];

        $total_harga = ($nasi_goreng * 12000) + ($mie_goreng * 13000) + ($ayam_goreng * 15000);

        echo "<h2>Total Pesanan Anda:</h2>";
        echo "Nasi Goreng: " . $nasi_goreng . " x Rp 12,000 = Rp " . ($nasi_goreng * 12000) . "<br>";
        echo "Mie Goreng: " . $mie_goreng . " x Rp 13,000 = Rp " . ($mie_goreng * 13000) . "<br>";
        echo "Ayam Goreng: " . $ayam_goreng . " x Rp 15,000 = Rp " . ($ayam_goreng * 15000) . "<br>";
        echo "<strong>Total Harga: Rp " . $total_harga . "</strong>";
    }
    ?>