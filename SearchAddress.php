<?php 

$location= $_POST['location_entered'];


if (!empty($location))
{
$url= 'https://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($location);

$jsoncontent= file_get_contents($url);

$decodedarray= json_decode($jsoncontent, true);

$zipcode= $decodedarray['results'][0]['address_components'][7]['long_name'];

}

?>
<form action="" method="POST">
Enter An Address to Find Its Zip Code: 
<input type="text" name="location_entered" value='<?php echo $location; ?>'/><br>
<input type="submit" name="Submit" value="Submit"/>
</form>

<?php 
if (!empty($location))
{
echo "Zip code: $zipcode"; 
}
?>