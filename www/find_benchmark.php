<html>
<body>
<?php
$zillow_id = 'X1-ZWz1ev77j4qw3v_agge7'; //the zillow web service ID that you got from your email

$search = "1615 Crest Road";
$citystate = "Raleigh NC";
$address = urlencode($search);
$citystatezip = urlencode($citystate);

$url = "http://www.zillow.com/webservice/GetDeepSearchResults.htm?zws-id=$zillow_id&address=$address&citystatezip=$citystatezip&rentzestimate=true";
$result = file_get_contents($url);
$data = simplexml_load_string($result);
$rent = $data->response->results->result[0]->rentzestimate->amount;
echo "Average rent is $rent";
?>

<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
$url = "http://api.glassdoor.com/api/api.htm?t.p=40134&t.k=j7XhsirWOBc&userip=173.247.205.174&useragent=Mozilla/%2F5.0&format=json&v=1&action=jobs-prog&countryId=1&jobTitle=waitress";
$result = file_get_contents($url);
$data = json_decode($result,true);
$response=$data['response']['results'][1]['medianSalary'];
echo "Average waitress salary is $response";
?>

<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
$url = "http://api.glassdoor.com/api/api.htm?t.p=40134&t.k=j7XhsirWOBc&userip=173.247.205.174&useragent=Mozilla/%2F5.0&format=json&v=1&action=jobs-prog&countryId=1&jobTitle=attorney&city=Raleigh&state=NC";
$result = file_get_contents($url);
$data = json_decode($result,true);
$response=$data['response']['results'][1]['medianSalary'];
$hoursal=$response / 1920 ;
echo "Average attorney salary per hour is $response $hoursal";
?>

<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
$query_string='napkins';
$quantity='400';
$url = "http://api.walmartlabs.com/v1/search?apiKey=h5shshh3rpf3wvg2xmuek9mb&query=napkins%20400";
$result = file_get_contents($url);
$data = json_decode($result,true);
#var_dump($data);
$response=$data['items'][0]['salePrice'];
echo "Napkins price  is $response";
?>

<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
$query_string='napkins';
$quantity='400';
$url = "http://api.walmartlabs.com/v1/search?apiKey=h5shshh3rpf3wvg2xmuek9mb&query=papercups%20500";
$result = file_get_contents($url);
$data = json_decode($result,true);
#var_dump($data);
$response=$data['items'][0]['salePrice'];
echo "Papercups value is $response";

?>

</body>
</html>
