<?php
include './admin/include/dbcon.php';

// if(!isset($_COOKIE['visit'])){
// 	setCookie('visit','yes',time()+(60*60*24*30));
// 	mysqli_query($conn,"update visit set total_count=total_count+1");
// }


// Check for spam keywords in blog content
$query = "SELECT * FROM blog 
          WHERE content LIKE '%slot%' 
          OR content LIKE '%toto%' 
          OR content LIKE '%gacor%'";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){
    echo "Spam content found:<br><br>";
    
    while($row = mysqli_fetch_assoc($result)){
        echo "Blog ID: ".$row['id']."<br>";
        echo "Title: ".$row['title']."<br>";
        echo "Content Preview: ".substr(strip_tags($row['content']),0,200)."<br>";
        echo "<hr>";
    }
}else{
    echo "No spam content found in blog table.";
}
?>