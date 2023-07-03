<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil nilai skor dan bobot dari input form
    $kekuatan_satu_skor = floatval($_POST['kekuatan_satu_skor']);
    $kekuatan_satu_bobot = floatval($_POST['kekuatan_satu_bobot']);

    $kekuatan_dua_skor = floatval($_POST['kekuatan_dua_skor']);
    $kekuatan_dua_bobot = floatval($_POST['kekuatan_dua_bobot']);

    // Ambil nilai skor dan bobot untuk faktor kekuatan lainnya
    // ...

    $kelemahan_satu_skor = floatval($_POST['kelemahan_satu_skor']);
    $kelemahan_satu_bobot = floatval($_POST['kelemahan_satu_bobot']);

    $kelemahan_dua_skor = floatval($_POST['kelemahan_dua_skor']);
    $kelemahan_dua_bobot = floatval($_POST['kelemahan_dua_bobot']);

    // Ambil nilai skor dan bobot untuk faktor kelemahan lainnya
    // ...

    $peluang_satu_skor = floatval($_POST['peluang_satu_skor']);
    $peluang_satu_bobot = floatval($_POST['peluang_satu_bobot']);

    $peluang_dua_skor = floatval($_POST['peluang_dua_skor']);
    $peluang_dua_bobot = floatval($_POST['peluang_dua_bobot']);

    // Ambil nilai skor dan bobot untuk faktor peluang lainnya
    // ...

    $ancaman_satu_skor = floatval($_POST['ancaman_satu_skor']);
    $ancaman_satu_bobot = floatval($_POST['ancaman_satu_bobot']);

    $ancaman_dua_skor = floatval($_POST['ancaman_dua_skor']);
    $ancaman_dua_bobot = floatval($_POST['ancaman_dua_bobot']);

    // Ambil nilai skor dan bobot untuk faktor ancaman lainnya
    // ...

    // Hitung skor terbobot untuk setiap kategori SWOT
    $total_skor_terbobot_kekuatan = ($kekuatan_satu_skor * $kekuatan_satu_bobot) + ($kekuatan_dua_skor * $kekuatan_dua_bobot);

    // Hitung skor terbobot untuk faktor kekuatan lainnya
    // ...

    $total_skor_terbobot_kelemahan = ($kelemahan_satu_skor * $kelemahan_satu_bobot) + ($kelemahan_dua_skor * $kelemahan_dua_bobot);

    // Hitung skor terbobot untuk faktor kelemahan lainnya
    // ...

    $total_skor_terbobot_peluang = ($peluang_satu_skor * $peluang_satu_bobot) + ($peluang_dua_skor * $peluang_dua_bobot);

    // Hitung skor terbobot untuk faktor peluang lainnya
    // ...

    $total_skor_terbobot_ancaman = ($ancaman_satu_skor * $ancaman_satu_bobot) + ($ancaman_dua_skor * $ancaman_dua_bobot);

    // Hitung skor terbobot untuk faktor ancaman lainnya
    // ...

    // Identifikasi faktor utama berdasarkan skor terbobot tertinggi
    $faktor_utama = [
        'Kekuatan' => $total_skor_terbobot_kekuatan,
        'Kelemahan' => $total_skor_terbobot_kelemahan,
        'Peluang' => $total_skor_terbobot_peluang,
        'Ancaman' => $total_skor_terbobot_ancaman
    ];

    $faktor_utama = array_keys($faktor_utama, max($faktor_utama));

    // Load file result.html
    include 'result.html';
}
?>
