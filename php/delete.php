<?php

    $file_path = $_POST['delete_file'];

    // Check if file is exists
    if ( file_exists('../uploads/'.$file_path) ) {

        // Delete the file
        unlink('../uploads/' . $file_path);

        // Be sure we deleted the file
        if ( !file_exists($file_path) ) {
            $response = array (
                'status' => 'success',
                'info'   => 'Successfully Deleted.'
            );
        } else {
            // Check the directory's permissions
            $response = array (
                'status' => 'error',
                'info'   => 'We screwed up, the file can\'t be deleted.'
            );
        }
    } else {
        // Something weird happend and we lost the file
        $response = array (
            'status' => 'error',
            'info'   => 'Couldn\'t find the requested file :('
        );
    }
    echo $file_path;



?>