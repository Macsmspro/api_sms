 <?php

$url = "https://macsmspro.com/api/otp.php";
$fields = array(
    
    "name" => urlencode("xxxxxx"), // à remplacer par le nom du message
    "telephone" => urlencode("44xxxxxxxx"), // à remplacer par le numéro du destinataire
    "message" => urlencode("Mon message"), // à remplacer par le message à envoyer
    "token" => urlencode("xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"), // à remplacer par votre token 
);

$fields_string = "";
foreach($fields as $key=>$value) { $fields_string .= $key."=".$value."&"; }


rtrim($fields_string, "&");

$ch = curl_init();

curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


$result = curl_exec($ch);

curl_close($ch);



$result = json_decode($result);

print_r($result);



?>
