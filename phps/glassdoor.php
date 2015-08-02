<html>
<body>
<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
$url = "http://api.glassdoor.com/api/api.htm?t.p=40134&t.k=j7XhsirWOBc&userip=173.247.205.174&useragent=Mozilla/%2F5.0&format=json&v=1&action=jobs-prog&countryId=1&jobTitle=waitress";
$result = file_get_contents($url);
$data = json_decode($result,true);
$response=$data['response']['results'][8];
echo $response['medianSalary'];
?>

</body>
</html>
