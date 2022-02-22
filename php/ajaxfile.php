<?php 

// Count total files
$countfiles = count($_FILES['files']['name']);
$now_time = date("YmdHis");
// Upload directory
$upload_location = "../uploads/";

// To store uploaded files path
$new_name = array();
$old_name = array();
$new_old = array();

// Loop all files
for($index = 0;$index < $countfiles;$index++){

	if(isset($_FILES['files']['name'][$index]) && $_FILES['files']['name'][$index] != ''){
		
		$filename = $_FILES['files']['name'][$index];

		$temp = explode(".", $_FILES['files']['name'][$index]);
		$newfilename = 'form1_'.$now_time . '_'. $index . '.' . end($temp);

		$path = $upload_location.$newfilename;

		if (!file_exists($filename) ) {
            // Upload file
    		if(move_uploaded_file($_FILES['files']['tmp_name'][$index],$path)){
    			$new_name[] = $newfilename;
				$old_name[] = $filename;
    		}
        }

	}
			   	
}
array_push($new_old,$new_name,$old_name);
echo json_encode($new_old);
die;
?>

