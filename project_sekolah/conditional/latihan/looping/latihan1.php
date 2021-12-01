<?php
// $helm = "helm";
// $stnk = "stnk";
// $sim = "sim";

// if ($helm == "tidak") {
//     echo "Kami cek perlengkapan surat STNK dan SIMnya";
// } else if ($helm == "tidak" && $stnk == "stnk") {
//     echo "Surat lengkap boleh kami cek SIMnya ?";
// } else if ($helm == "helm" && $stnk == "stnk" && $sim == "sim") {
//     echo "Selamat berkendara hati - hati di jalan";
// } else {
//     echo "anda kami tilang";
// }

$helm = true;
$stnk = true;
$sim = true;

if ($helm == true && $stnk == false) {
    echo "Kami cek perlengkapan surat STNK dan SIMnya";
} else if ($helm == true && $stnk == true) {
    echo "Surat lengkap boleh kami cek SIMnya ?";
} else if ($helm == true && $stnk == true && $sim == true) {
    echo "Selamat berkendara hati - hati di jalan";
} else {
    echo "anda kami tilang";
}
