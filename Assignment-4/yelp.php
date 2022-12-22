<?php
  // put your Yelp API key here:
  $API_KEY = 'Bs9tmlNC4AJa-hTszAyuhe4d7l5hEn7DzyRlY4OCjBBunhnqcwKRlVS2zNGbKHEpMq7mdEOZCkXDJwflnuYysWEJwDsYvoYfRls3Jx-XLpDc2TVqolv0uITDHlk_Y3Yx';

  $API_HOST = "https://api.yelp.com";
  $SEARCH_PATH = "/v3/businesses/search";
  $BUSINESS_PATH = "/v3/businesses/";
  $curl = curl_init();
  if (FALSE === $curl)
     throw new Exception('Failed to initialize');
  $url = $API_HOST . $SEARCH_PATH . "?" . $_SERVER['QUERY_STRING'];
  curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,  // Capture response.
            CURLOPT_ENCODING => "",  // Accept gzip/deflate/whatever.
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "authorization: Bearer " . $GLOBALS['API_KEY'],
                "cache-control: no-cache",
            ),
        ));
  $response = curl_exec($curl);
  curl_close($curl);
  print $response;


  <?php
// define variables and set to empty values
$findErr = $searchErr 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["find"])) {
    $findErr = "Option is required";
  } else {
    $find = test_input($_POST["find"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$find)) {
      $findErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["search"])) {
    $searchErr = "fields are required";
  } else {
    $search = test_input($_POST["search"]);
    // check if search is well-formed
    if (!filter_var($search,)) {
      $searchErr = "Invalid format";
    }
  


// Function to iteratively search for a given value
function city($array) {
	foreach ($array as $key1 => $val1) {

		$temp_arr = $id_arr;
		
		// Adding current key to search path
		array_push($temp_arr, $key1);
		if(is_array($val1) and count($val1)) {
			foreach ($val1 as $key1 => $val1) {

				if($val1== $search_value) {
						
					
					array_push($temp_arr, $key2);
						
					return join(" --> ", $temp_arr);
				}
			}
		}
		
		elseif($val1 == $search_value) {
			return join(" --> ", $temp_arr);
		}
	}
	
	return null;
}

print($search_path);

function search($array) {
	foreach ($array as $key1 => $val1) {

		$temp_arr = $id_arr;
		
		// Adding current key to search path
		array_push($temp_arr, $key1);
		if(is_array($val1) and count($val1)) {
			foreach ($val1 as $key1 => $val1) {

				if($val1== $search_value) {
						
					
					array_push($temp_arr, $key2);
						
					return join(" --> ", $temp_arr);
				}
			}
		}
		
		elseif($val1 == $search_value) {
			return join(" --> ", $temp_arr);
		}
	}
	
	return null;
}

print($search_path);

function favourites($array) {
	foreach ($array as $key1 => $val1) {

		$temp_arr = $id_arr;
		
		// Adding current key to search path
		array_push($temp_arr, $key1);
		if(is_array($val1) and count($val1)) {
			foreach ($val1 as $key1 => $val1) {

				if($val1== $search_value) {
						
					
					array_push($temp_arr, $key2);
						
					return join(" --> ", $temp_arr);
				}
			}
		}
		
		elseif($val1 == $search_value) {
			return join(" --> ", $temp_arr);
		}
	}
	
	return null;
}

print($search_path);
?>
