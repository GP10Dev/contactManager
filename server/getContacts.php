<?php
    $sql = "select * from contacts where 1;";
    require "./config.php";

    $reconn = mysqli_query($conn, $sql);
    if(!$reconn){
        die("failed to query");
    }

    if(mysqli_num_rows($reconn) < 1){
        die("No record were founds in sytem");
    }
        else{
    while($i = mysqli_fetch_assoc($reconn)){
        echo "
        <li>
            <span>".$i['fname']."</span>
            &nbsp;
            <span>".$i['mname']."</span>
            &nbsp;
            <span>".$i['lname']."</span>
            &nbsp;
            <span>".$i['phone1']."</span>
            &nbsp;
            <span>".$i['phone2']."</span>
        </li>
        ";
    }

    mysqli_close($conn); }
?>