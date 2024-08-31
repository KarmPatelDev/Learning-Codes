<?php

/* Form Data To json File Create */

if($_POST['name'] != '' && $_POST['age'] != '' && $_POST['gender'] != ''){

    if(file_exists('159-Test.json')){
        $current_data = file_get_contents('159-Test.json'); // Retrieve json file data
        $array_data = json_decode($current_data, true);  // convert to array
    
        $new_data = array(   // make form data array
            'name' => $_POST['name'],
            'age' => $_POST['age'],
            'gender' => $_POST['gender'],
            'country' => $_POST['country'],
        );
    
        $array_data[] = $new_data;  // add new data to array data
        $json_data = json_encode($array_data, JSON_PRETTY_PRINT); // encode to json
    
        if(file_put_contents('159-Test.json', $json_data)){
           echo "<h3>Successfully Saved Data in JSON file</h3>";
        }else{
          echo "<h3>Data not Saved in File</h3>";
        }
    }
    else{
        echo "<h3>File does not exists</h3>";
    }

    

}
else{
    echo "<h3>All Form Fields Are Required.</h3>";
}

?>