<?php
/**
 * Created by IntelliJ IDEA.
 * User: etuncay
 * Date: 15/04/2017
 * Time: 21:12
 */
$aranan = 'skrya unversite';
$kelimeler = array('sakarya üniversitesi','sakarya','sakarya üniversite');
$shortest = -1;
foreach ($kelimeler as $kelime) {
    $lev = levenshtein($aranan, $kelime);
    if ($lev == 0) {
        $closest = $kelime;
        $shortest = 0;
        break;
    }
    if ($lev <= $shortest || $shortest < 0) {
        $closest = $kelime;
        $shortest = $lev;
    }
}
echo "Aranan kelime: $aranan\n<br />";
if ($shortest == 0) {
    echo "$closest için tam uyan bir kelime bulunamadı.";
} else {
    echo "Demek istediğiniz şu kelime mi? : $closest ";
}
