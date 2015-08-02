<html>
<body>
<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
$query_string='napkins';
$quantity='400'
$url = "http://api.walmartlabs.com/v1/search?apiKey=h5shshh3rpf3wvg2xmuek9mb&query=$query_string%20$quantity";
$result = file_get_contents($url);
$data = json_decode($result,true);
#var_dump($data);
$response=$data['items'][0]['salePrice'];
echo $response;

?>

</body>
</html>
