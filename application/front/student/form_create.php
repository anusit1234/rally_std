<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $db = new database();
    $std_id = $_REQUEST["std_id"];
    $sql = "SELECT std_id FROM std_choose_rally where std_id='$std_id'";
    $query = $db->query($sql);
    $rows = $db->rows($query);

    $rally_id = $_REQUEST["rally_id"];
        $sql_count = "SELECT * FROM std_choose_rally t1 inner join rally t2 on t1.rally_id = t2.rally_id
		                WHERE (SELECT amount FROM rally WHERE rally_id='$rally_id') = (SELECT COUNT(rally_id) FROM std_choose_rally WHERE rally_id='$rally_id')";
        $query_count = $db->query($sql_count);
        $rows_count = $db->rows($query_count);

        $sql_teacher = "SELECT teacher1, teacher2 FROM rally WHERE rally_id='$rally_id'";
        $query_teacher = $db->query($sql_teacher);
        $rs_teacher = $db->get($query_teacher);

        $teacher1 = $rs_teacher['teacher1'];
        $teacher2 = $rs_teacher['teacher2'];


    if($rows > 0){
        echo "<script>";
        echo "alert('ขออภัย..! คุณมีข้อมูลชุมนุมอยู่ในระบบแล้ว ไม่สามารถเลือกได้อีก');";
        echo "window.location='$baseUrl/front/student'";
        echo "</script>";
    }

    if($rows_count > 0){
        echo "<script>";
        echo "alert('ขออภัย..! สมาชิกในชุมนุมนี้เติมจำนวนแล้ว');";
        echo "window.location='$baseUrl/front/student/create_rally'";
        echo "</script>";
    }

    if($rows_count == 0 && $rows == 0){
        $value_user = array(
            "std_name" => trim($_POST['std_name']),
            "classroom" => trim($_POST['classroom']),
            "year" => trim($_POST['year']),
            "std_id" => trim($_POST['std_id']),
            "rally_id" => trim($_POST['rally_id']),
            "teacher1" => $teacher1, 
            "teacher2" => $teacher2, 
            "create_date" => date('Y-m-d')
        );
        $query_user = $db->insert("std_choose_rally", $value_user);
    
        if ($query_user == TRUE) {
            unset($_SESSION[_ss . 'levelaccess']);
                // header("location:" . $baseUrl . "/back/alert");
            echo "<script>";
            echo "alert('บันทึกข้อมูลสำเร็จ');";
            echo "window.location='$baseUrl'";
            echo "</script>";
        }
    }
 
    
}