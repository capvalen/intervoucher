<?
include "infocat.php";
$json = file_get_contents('https://intervouchers.com/ticket/precios.json');
$obj = json_decode($json,true);
$tBase= $obj[$_POST['card']];
$nombre = 'Intervouchers';


$billeteraAumbbel = '1PauQUU89jyihneBttsWc8RocfZEyzroeT';
$precioBitcion =0;
$precioDolares = floatval($tBase['tarjetas'][$_POST['subid']]['precio']);

$jBTC = file_get_contents('https://blockchain.info/tobtc?currency=USD&value='.round($precioDolares,2));

$filas = array(
   "card" => $tBase['nombre'],
   "tipo" => $tBase['tarjetas'][$_POST['subid']]["base"],
   "monto" => round($precioDolares,2),
   "enBtc" => $jBTC,
   "aumbbel" => $billeteraAumbbel,
   "img" => "https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl=bitcoin:".$billeteraAumbbel."?amount=".$jBTC."%26label=".$nombre
);

echo json_encode($filas);

?>
