<?php       /* + Created by PhpStorm. + User: Shahbaaz + Date: 31-01-2016 + Time: 12:08 */

include('dbConfig.php');
$get_auname = $_REQUEST['auname'];
$get_password = $_REQUEST['password'];

if($get_password != '' || $get_auname != ''){

    
    $sql_select = " SELECT * FROM adminreg WHERE `auname` =  '".$get_auname."' AND `password` = '".$get_password."' ";
    //echo $sql_select;
    $select_exe = mysqli_query($sql_select)or die("Cannot execute login!!! > " . mysqli_error());
    //echo $select_exe;
    if(mysql_num_rows($select_exe) > 0){
        /*this below code will be used to fetched only column when it get executed*/
        $row = mysql_fetch_array($select_exe);
        session_start();
        $_SESSION['aid'] = $row['aid'];
        header("location: dashboard.php");
    }
    else{
        header("location: login.php?msg=error");
    }
}


?>