<?php
    // require("dbconfig.php");

    $visit_ip = $_SERVER['REMOTE_ADDR'];
    $visit_time;
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $visit_page = $_SERVER['PHP_SELF'];

    $conn = mysqli_connect("localhost", "root", "vjEj31NP8x", "B06_exp_server");
    $sql = "insert into exp_visit(ip, time, agent, page) values('{$visit_ip}', now(), '{$user_agent}', '{$visit_page}')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
?>