<?php
$ipk = "5";

if ($ipk > "0" && $ipk < "2") {
    echo "IPK anda $ipk <br>";
    echo "Grade E, Maaf anda harus mengulang";
} else if ($ipk >= "2" && $ipk < "2.6") {
    echo "IPK anda $ipk <br>";
    echo "Grade D, Maaf anda harus memperbaiki mata kuliah";
} else if ($ipk >= "2.6" && $ipk < "3") {
    echo "IPK anda $ipk <br>";
    echo "Grade C, Mau memperbaiki boleh juga tidak";
} else if ($ipk >= "3" && $ipk < "3.5") {
    echo "IPK anda $ipk <br>";
    echo "Grade B, Mata kuliah anda baik";
} else if ($ipk >= "3.5" && $ipk <= "4") {
    echo "IPK anda $ipk <br>";
    echo "Grade A, Mata kuliah anda super";
} else {
    echo "Erorr!1!";
}
