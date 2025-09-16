<?php

function isDuplicateSubmission($email, $phone) {
  $dataStoreFile = 'datastore.txt'; // for storing the data temporarily 

  // Read the data store file
  $data = @file_get_contents($dataStoreFile);

  if ($data !== false) {
    $data = json_decode($data, true);
    if ($data !== null) {
      foreach ($data as $entry) {
        if ($entry['email'] == $email && $entry['phone'] == $phone && (time() - $entry['timestamp']) <= 86400) {
          return true; // if Duplicate found
        }
      }
    }
  }

  return false; // If No recent duplicates found
}


$name = $_POST['nme'];
$email = $_POST['eml'];
$phone = $_POST['phn'];
$goal = $_POST['goal'];
$comp = $_POST['comp'];

$gclid = $_POST['gclid'];
$utm_src = $_POST['utm_source'];
$utm_med = $_POST['utm_medium'];
$utm_camp = $_POST['utm_campaign'];
$utm_term = $_POST['utm_term'];
$utm_cont = $_POST['utm_content'];
$utm_refer = $_POST['utm_ref'];
$ip_add = $_POST['ip_add'];


if ($name != '' && $email != '' && $phone != '' && $goal != '' && $comp != '') {
  
	
	if (!isDuplicateSubmission($email, $phone)) {

		$timestamp = time();

		// Prepare the data for insertion
		$data = [
			'email' => $email,
			'phone' => $phone,
			'timestamp' => $timestamp,
		];

		// Serialize the data and append it to the data store file
		$dataStoreFile = 'datastore.txt'; 
		$existingData = @file_get_contents($dataStoreFile);
		$existingDataArray = json_decode($existingData, true) ?: [];
		$existingDataArray[] = $data;
		$encodedData = json_encode($existingDataArray);
		file_put_contents($dataStoreFile, $encodedData);

		$data = [
	        'entry.2093233772' => $name,
	        'entry.1458854503' => $email,
	        'entry.714031452' => $phone,
	        'entry.1341410468' => $comp,
	        'entry.1547816485' => $goal,
	        'entry.1428546390' => $gclid,
	        'entry.2040599684' => $utm_src,
	        'entry.1938750442' => $utm_med,
	        'entry.1849886808' => $utm_camp,
	        'entry.1463232045' => $utm_term,
	        'entry.1264012936' => $utm_cont,
	        'entry.1393209995' => $utm_refer,
	        'entry.767634173' => $ip_add,
		];

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://docs.google.com/forms/u/1/d/e/1FAIpQLSc6Jzu-QG-YjZ1_C0hDbUcOVgZqhzOnzlvWhnj4o4NLsgX9oQ/formResponse');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($ch, CURLOPT_TIMEOUT, 15);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
		$response = curl_exec($ch);

		header('Location: thank-you.html');

	}
	else {
      echo "<script>alert('Duplicate phone and email detected. Please try again after 1 day.'); window.location.href = 'index.php';</script>";
    }

}
?>