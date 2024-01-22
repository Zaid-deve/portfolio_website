<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // defaults
    $output = 'Something Went Wrong !';

    // db connection
    require "../db/db_conn.php";

    // get vars
    $email = $conn->real_escape_string($_POST['e']);
    $sub = $conn->real_escape_string($_POST['s']);
    $des = $conn->real_escape_string($_POST['d']);


    // validate vars
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $output = 'Please enter a valid email address !';
    } else if (empty($sub) or strlen($sub) > 60) {
        $output = "Subject cannot be empty or cannot be greater than 60 ";
    } else {
        // db query
        $qry = $conn->query("INSERT INTO contact (cemail, csub,cdes)
                             VALUES ('{$email}','{$sub}', '{$des}')");

        if($qry) $output = 'success';
    }


    // response result
    echo $output;
}
