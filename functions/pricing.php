$taux = 0.19;
function ttcGlobal($prix) {
global $taux; // à éviter
return $prix * (1 + $taux);
}
function ttc($prix, $taux) { // à préférer
return $prix * (1 + $taux);
}
echo ttc(100, $taux); // 119