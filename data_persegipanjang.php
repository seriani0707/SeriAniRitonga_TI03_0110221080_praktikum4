
<?php
require_once "class_persegipanjang.php";

$persegipanjang1 = new PersegiPanjang(6, 3);
$persegipanjang2 = new PersegiPanjang(12, 6);

echo "<br> Luas Persegi Panjang1 = ".$persegipanjang1->getLuas();
echo "<br> Luas Persegi Panjang2 = ".$persegipanjang2->getLuas();
echo "<br> Keliling Persegi Panjang1 = ".$persegipanjang1->getKeliling();
echo "<br> Keliling Persegi Panjang2 = ".$persegipanjang2->getKeliling();

?>