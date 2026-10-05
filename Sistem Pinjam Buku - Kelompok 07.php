<?php
    // punya kelompok 07
    // jangan copy pls
    
    class Perpustakaan {

    public $buku = [
        [
            "judul" => "Ayah",
            "penulis" => "Andrea Hirata",
            "tersedia" => false
        ],
        [
            "judul" => "Bumi",
            "penulis" => "Tere Liye",
            "tersedia" => true
        ],
        [
            "judul" => "Metamorphosis",
            "penulis" => "Franz Kafka",
            "tersedia" => true
        ]
        ];

        public function tampilkanBuku() {

            echo "<h3>Daftar Buku</h3>";

            foreach ($this->buku as $i => $buku) {

                if ($buku["tersedia"]) {
                    $status = "Tersedia";
                } else {
                    $status = "Dipinjam";
                }

                echo ($i + 1) . ". ";
                echo $buku["judul"] . " - ";
                echo $buku["penulis"] . " | ";
                echo $status . "<br>";
            }
        }

        public function pinjam($nomor) {

            if ($this->buku[$nomor]["tersedia"]) {

                $this->buku[$nomor]["tersedia"] = false;

                echo "Buku berhasil dipinjam.";

            } else {

                echo "Buku sedang dipinjam.";
            }
        }

        public function kembalikan($nomor) {

            if (!$this->buku[$nomor]["tersedia"]) {

                $this->buku[$nomor]["tersedia"] = true;

                echo "Buku berhasil dikembalikan.";

            } else {

                echo "Buku tersebut belum dipinjam.";
            }
        }
    }

    $perpustakaan = new Perpustakaan();

    function cekPilihan($pilihan, $perpustakaan) {

        if ($pilihan == 1) {

            $perpustakaan->tampilkanBuku();

        } elseif ($pilihan == 2) {

            $perpustakaan->pinjam(0);

        } elseif ($pilihan == 3) {

            $perpustakaan->kembalikan(0);

        } else {

            echo "Pilihan tidak tersedia.";
        }
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Perpustakaan Kelompok 07</title>
        
        <style>
            * {
                box-sizing: border-box;
            }

            .div {
                height: auto;
                width: 350px; 
                border: dashed 2px;
                text-align: center;
                margin-bottom: 15px;
            }
        </style>
    </head>

    <body>
        <div class="div">
            <h2>=== PERPUSTAKAAN ===</h2>

            <p>1. Tampilkan Buku</p>
            <p>2. Pinjam Buku</p>
            <p>3. Kembalikan Buku</p>
        </div>

        <div class="div">
            <?php

            echo $pilihan = 1;

            cekPilihan($pilihan, $perpustakaan);

            ?>
        </div>

        <div class="div">
            <?php

            $pilihan = 2;
            
            cekPilihan($pilihan, $perpustakaan);

            ?>
        </div>
    </body>
</html>