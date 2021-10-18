<?php

#hello world code
echo "Hello World <br><br>";

#konstanta
define ("kampus","Universitas Nusa Putra");
define ("jurusan","Teknik Informatika");
define ("alamat","Jalan Cibolang Sukabumi");

echo "Saya kuliah di : " .kampus. "<br>";
echo "Jurusan yang saya ambil : " .jurusan. "<br>";
echo "Kampusku beralamat di : " .alamat. "<br><br>";

#variable
$buku = "Programing PHP";
$penulis = "Joko Suntoro";

echo "variabel <b>buku</b> mempunyai nilai : <b>" .$buku. "</b><br>";
echo "variabel <b>penulis</b> mempunyai nilai : <b>" .$penulis. "</b><br><br>";

#operator aritmatika
$angka1 = 100;
$angka2 = 50;

#operator penjumlahan
$jumlah = $angka1 + $angka2;

#operator pengurangan
$kurang = $angka1 - $angka2;

#operator perkalian
$kali = $angka1 * $angka2;

#operator pembagian
$bagi = $angka1 / $angka2;

#operator modulus
$mod = $angka1 % $angka2;

#yang ditampilkan browser
echo "angka 1 = " .$angka1. "<br>";
echo "angka 2 = " .$angka2. "<br><hr>";
echo "angka 1 + angka 2 = " .$jumlah. "<br>";
echo "angka 1 - angka 2 = " .$kurang. "<br>";
echo "angka 1 x angka 2 = " .$kali. "<br>";
echo "angka 1 : angka 2 = " .$bagi. "<br>";
echo "Sisa hasil bagi antara angka 1 dan angka 2 adalah = " .$mod. "<br><br>";

#operator perbandingan
$a = 31;
$b = 7;

#yang ditampilkan di browser
echo "nilai a = " .$a. "<br>";
echo "nilai b = " .$b. "<br>";

if ( $a>$b ) {
    echo "a lebih besar dari b";
}
elseif ( $a<$b ) {
    echo "a lebih keccil dari b";
}
elseif ( $a==$b ) {
    echo "a sama dengan b";
}
else {
    echo "data tidak valid"; 
}
    echo "<br><br>";

#struktur kendali if
# if (kondisi) {
#    statement
# }

#struktur kendali if..else..
$user = "Joko";
$pass = "1234";

#yang ditampilkan browser
if ( $user == "Joko" && $pass == "1234") {
    echo "Anda berhasil login dengan menggunakan user $user";
}
else {
    echo "Anda gagal login, silahkan cek user dan pass anda";
}
echo "<br><br>";

#struktur kendali switch case
$bulan = date ("m");
switch ($bulan) {
    case " 07 " :
        $hasil = "Juli";
        break;

        case "08" :
            $hasil = "Agustus";
            break;

            case "09" :
                $hasil = "September";
                break;

                case "10" :
                    $hasil = "October";
                    break;

                    default :
                    $hasil = "tidak ditemukan";
                }

# yang ditampilkan di browser
echo "Saya lahir pada bulan sekarang, yaitu bulan <b>$hasil</b";

?>