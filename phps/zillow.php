<html>
<body>
<?php
$zillow_id = 'X1-ZWz1ev77j4qw3v_agge7'; //the zillow web service ID that you got from your email

$search = $_GET["address"];
$citystate = $_GET["zip"];
$address = urlencode($search);
$citystatezip = urlencode($citystate);

$url = "http://www.zillow.com/webservice/GetDeepSearchResults.htm?zws-id=$zillow_id&address=$address&citystatezip=$citystatezip&rentzestimate=true";
$result = file_get_contents($url);
$data = simplexml_load_string($result);
$rent = $data->response->results->result[0]->rentzestimate->amount;
echo "Average rent is $rent";
?>

</body>
</html>
