<?php
	session_start();
 	$auth_token = 'AU98Nw-MFJUAAAAAAAAAARh16BsIbUYBfqUYJzAzmXEPmiIResdhkK1Qx57Ab1cq';
	$verify = true;
	function delete($path)
	{
		global $auth_token, $verify;
		$path = '/'.$_POST['del_info'];
   		$args = array("path" => $path);
   		$ch = curl_init();
   		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
   		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $auth_token,
          'Content-Type: application/json'));
   		curl_setopt($ch, CURLOPT_URL, 'https://api.dropboxapi.com/2/files/delete_v2');
   		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($args));
   		try {
     		$result = curl_exec($ch);
     		$_SESSION['delete_alert'] = "1";
   		} catch (Exception $e) {
     		echo 'Error: ', $e->getMessage(), "\n";
   		}
   		curl_close($ch);
	}
	function image($path, $dbox_path)
	{
		global $auth_token, $verify;
   		$args = array("path" => $path, "mode" => "add");
   		$fp = fopen($path, 'rb');
   		$size = filesize($path);
   		$ch = curl_init();
   		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   		curl_setopt($ch, CURLOPT_PUT, true);
   		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
   		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $auth_token,
   		     'Content-Type: application/octet-stream',
		     'Dropbox-API-Arg: {"path":"/'.$dbox_path.'", "mode":"add"}'));
   		curl_setopt($ch, CURLOPT_URL, 'https://content.dropboxapi.com/2/files/upload');
   		curl_setopt($ch, CURLOPT_INFILE, $fp);
   		curl_setopt($ch, CURLOPT_INFILESIZE, $size);
   		try {
     		$result = curl_exec($ch);
     		$_SESSION['upload_successful'] = "1";
   		} catch (Exception $e) {
     		echo 'Error: ', $e->getMessage(), "\n";
   		}
   		if ($verify)
    		curl_close($ch);
   		fclose($fp);
	}
	function download($path, $target_path)
	{
		global $auth_token, $verify;
   		$ch = curl_init();
   		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   		curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
   		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
   		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $auth_token,
      		    'Content-Type:', 'Dropbox-API-Arg: {"path":"/'.$path.'"}'));
   		curl_setopt($ch, CURLOPT_URL, 'https://content.dropboxapi.com/2/files/download');
   		try {
     		$result = curl_exec($ch);
			$_SESSION['download_alert'] = "1";
			$_SESSION['img_path'] = 'images/'.$path;
   		} catch (Exception $e) {
     		echo 'Error: ', $e->getMessage(), "\n";
   		}
   		file_put_contents($target_path,$result);
   		curl_close($ch);
	}
		function Imagelist($path)
    	{
    		global $auth_token, $verify;
    		$args = array("path" => $path);
       		$ch = curl_init();
       		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
       		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
       		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $auth_token,
       		    'Content-Type: application/json'));
       		curl_setopt($ch, CURLOPT_URL, 'https://api.dropboxapi.com/2/files/list_folder');
       		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($args));
       		try {
         		$result = curl_exec($ch);
       		} catch (Exception $e) {
         		echo 'Error: ', $e->getMessage(), "\n";
       		}
       		curl_close($ch);
       		return $result;
    	}

	if(isset($_FILES['image']))
	{
		$path = $_FILES['image']['tmp_name'];
		$dbox_path = $_FILES['image']['name'];
		image($path,$dbox_path);
	}
	if(isset($_SERVER['REQUEST_METHOD']) AND $_SERVER['REQUEST_METHOD'] === 'POST')
	{
		if(isset($_POST['dl_info']) AND !empty($_POST['dl_info']))
		{
			$path = $_POST['dl_info'];
			$target_path = 'images/'.$path;
			download($path,$target_path);
		}
	}
	if(isset($_SERVER['REQUEST_METHOD']) AND $_SERVER['REQUEST_METHOD'] === 'POST')
	{
		if(isset($_POST['del_info']) AND !empty($_POST['del_info']))
		{	
			$path = '/'.$_POST['del_info'];
			delete($path);
		}
	}
	$path = "";
	$result = Imagelist($path);
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Album</title>
	<style  rel="stylesheet" type="text/css">
			.my_btn {
        		padding: 10px 20px;
        		background: purple;
        		border-radius: 3px;
        		color: #fff;
        		margin-bottom: 30px;
        		border: 1px dotted #ddd;
        		cursor: pointer;
    		}
    		.upload{
    		        		padding: 10px 20px;
                                    		background: pink;
                                    		border-radius: 3px;
                                    		color: #fff;
                                    		margin-bottom: 30px;
                                    		border: 1px dotted #ddd;
                                    		cursor: pointer;

    		}
    		ol {
              background: #ff9999;
              padding: 20px;
            }

            ul {
              background: #3399ff;
              padding: 20px;
            }

            ol li {
              background: #ffe5e5;
              padding: 5px;
              margin-left: 35px;
            }

            ul li {
              background: #cce5ff;
              margin: 5px;
            }

            input[type=text], select {
              width: 100%;
              padding: 12px 20px;
              margin: 8px 0;
              display: inline-block;
              border: 1px solid #ccc;
              border-radius: 4px;
              box-sizing: border-box;
            }

            input[type=submit] {
              width: 100%;
              background-color: #4CAF50;
              color: white;
              padding: 14px 20px;
              margin: 8px 0;
              border: none;
              border-radius: 4px;
              cursor: pointer;
            }

            input[type=submit]:hover {
              background-color: #45a049;
            }

            div {
              border-radius: 5px;
              background-color: #f2f2f2;
              padding: 20px;
            }
</style>
</head>
<body>
<body>

	<section>

	<div>
		<div>
			 <h1 style="color: yellow">Album</h1>

			 </h1>
		</div>

		<div>
 			<?php
				if (isset($_SESSION["upload_successful"])) {
				echo '<script type="text/JavaScript">
                     alert("image uploaded");
                     </script>'
                ;
 						unset($_SESSION["upload_successful"]);
				}
				else if(isset($_SESSION["download_alert"])){
					echo '<script type="text/JavaScript">
                                     alert("image downloaded");
                                     </script>'
                                ;
 				}
				else if(isset($_SESSION["delete_alert"])){
					echo '<script type="text/JavaScript">
                                     alert("image deleted");
                                     </script>'
                                ;
 						unset($_SESSION["delete_alert"]);
				}
			?>

			<div>
				<h2>Drop box image upload and delete</h2>

				<form style="width: 100%;" method="POST" action="album.php" enctype="multipart/form-data">
					<label for="upload_img" style="">
						<span class="my_btn">Choose an Image</span>
						<spans style= "color: blue;font-size: 18px;" id="flnspn"></span>
					</label>
					<br>
					<br>
					<input style="display: none;" id="upload_img" type="file" name="image" accept="image/JPEG" onchange="displayImage(this);">
					<button class="upload">upload the image</button>
				</form>
			</div>
		</div>
		<div>
			<div>
				<h2>Image List</h2>
				<div>
					<ul>
						<?php
						$array = [];
						$array = json_decode(trim($result), TRUE);
						if(sizeof($array['entries']) > 0)
						{
							foreach ($array['entries'] as $x) {
								if(strlen($x['name']) <= 25)
								{
									echo "<li><a href='javascript:void(0)' onclick=\"dwn('".$x['name']."')\">".$x['name']."</a>&nbsp;<form id='dl_form_id".$x['name']."' method='post' enctype='multipart/form-data'><input type='hidden' name='dl_info' value='".$x['name']."' ></form><button class='my_btn' onclick=\"dlt('".$x['name']."')\">Delete</button><form id='del_form_id".$x['name']."' method='post' enctype='multipart/form-data'><input type='hidden' name='del_info' value='".$x['name']."' ></form></li>";
								}
								else
								{
									echo "<li><a href='javascript:void(0)' onclick=\"dwn('".$x['name']."')\">".substr($x['name'],0,15)."...".explode('.', $x['name'])[1]."</a>&nbsp;<form id='dl_form_id".$x['name']."' method='post' enctype='multipart/form-data'><input type='hidden' name='dl_info' value='".$x['name']."' ></form><button class='my_btn' onclick=\"dlt('".$x['name']."')\">Delete</button><form id='del_form_id".$x['name']."' method='post' enctype='multipart/form-data'><input type='hidden' name='del_info' value='".$x['name']."' ></form></li>";
								}
   							}
						}
						else
						{
							echo "No images present in dropbox";
						}
						?>
					</ul>
				</div>
			</div>
			<div>
				<div align="center">
				<?php
					if(isset($_SESSION['img_path']))
					{
						echo "<img id='display_img' src='".$_SESSION['img_path']."' style='width:100%;'>";
						unset($_SESSION['download_alert']);
						unset($_SESSION['img_path']);
					}
				?>
				</div>
			</div>
		</div>
	</div>
	</section>
</body>
<script type="text/javascript">
	function dwn(name)
	{
		document.getElementById('dl_form_id'+name).submit();
	}
	function dlt(name)
	{
		document.getElementById('del_form_id'+name).submit();
	}
	function displayImage(inpt_file)
	{

			document.getElementById("flnspn").innerHTML = inpt_file.files.item(0).name;
		 
	}
</script>
</html>
