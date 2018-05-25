<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new database();
    $std_id = salt_pass($_POST['std_id']);
    $option_pw = array(
        "table" => "student",
        "fields" => "std_id",
        "condition" => "std_id='{$std_id}'"
    );
    $query_pw = $db->select($option_pw);
    $rows_pw = $db->rows($query_pw);
    if ($rows_pw == 1) {
        $rs_pw = $db->get($query_pw);
        $_SESSION[_ss . 'std_id'] = $rs_pw['std_id'];

        header('location:'.$baseUrl.'/front/student/create_rally');
        
    }else{
        echo "<script>";
        echo "alert('รหัสนักศึกษาไม่ถูกต้อง กรุณากรอกใหม่อีกครั้ง');";
        echo "window.location='$baseUrl'";
        echo "</script>";
    }
    
}