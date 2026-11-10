<?php
    // Percabangan if pada PHP

    $nilai = 70;

    // beri keterangan Lulus apabila nilai 65 ke atas

    if( $nilai >= 65 ){
        $ket = "Lulus";
    }else{
        $ket = "Tidak Lulus";
    }

    echo "Keterangan : ". $ket;