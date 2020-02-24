<?php   /** * Created by PhpStorm. * User: Shahbaaz * Date: 31-01-2016 * Time: 11:57 */
include('conn.php');
error_reporting( error_reporting() & ~E_NOTICE );
error_reporting(E_ERROR | E_PARSE);
session_start();
$tabindex = 1;
$conn = mysqli_connect($hostname, $database, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


function setImage($name){
    $arr1 = str_split($name);
    $getFirstAlpha = strtoupper($arr1[0]);
    return $getFirstAlpha;
}


/*remove zeros from scrap rate*/

function setDate($set_date){
    return date("d-M-Y",strtotime($set_date));
}
function setDateSlash($get_slash_date){
    return date("d/m/Y",strtotime($get_slash_date));
}

function getDateYMD($get_date_YMD){
    return date("Y-m-d",strtotime($get_date_YMD));
}
function getDateDMY($get_date_DMY){
    return date("d-m-Y",strtotime($get_date_DMY));
}
function getDateYMDSlash($get_date_YMD){
    $get_date = explode('/',$get_date_YMD);
    $set_date = implode('-',$get_date);
    return date("Y-m-d",strtotime($set_date));
}
/*this function will count the no of entries*/

/*this function will calculate amounts in SUM*/

/*get only year*/
function getYear($NowYear){
   return date("Y",strtotime($NowYear));
}
/*this function used in doctor score card to set the color based on values*/



function titleName(){
    echo 'Visitor Log Automation';
}

session_start()
?>