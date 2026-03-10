<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include($_SERVER["DOCUMENT_ROOT"].'/admin/include/dbcon.php');
// echo $conn;
$action = isset($_GET['action'])?$_GET['action']:' ';
 
if($action === 'getImages'){
    $data = getImages();
    echo json_encode($data);
}
function getImages(){
    $data =array();
    $sql = "SELECT * FROM gallery ORDER BY rand()";
    global $conn;
    $result = mysqli_query($conn,$sql);
    if($result){
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
                $data[]=array(
                    'id'=>$row['id'],
                    'img'=>$row['img']

                );
            }
            
        }
    }
    return $data;


    
}
?>