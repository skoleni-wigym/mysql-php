<?php

$age = 18;

if ($age >= 18) {
    echo "V pořádku.";
} else {
    echo "Mohu vidět občanku?";
}

// Podmínky se vyhodnocují postupně shora dolů
if ($age > 120) {
    echo "Zavolejte někdo kněze!";
} else if ($age >= 18) {
    echo "V pořádku.";
} else {
    echo "Mohu vidět občanku?";
}