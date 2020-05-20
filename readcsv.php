<?php
    include "./conn.php";
    // $row = 1;
    // if (($handle = fopen("./csv/data.csv", "r")) !== FALSE) {
    //     while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    //         $num = count($data);                
    //         // for ($c=1; $c < $num; $c++) {
    //         //     echo $data[$c];
    //         // }
    //         $sql = "INSERT INTO product (name, type, price) VALUES ('$data[1]', '$data[2]', '$data[3]')";
    //         if(mysqli_query($conn, $sql)){
    //             echo "name : " .  $data[1] . " type : " . $data[2] . " price : " . $data[3] . " success";
    //         }
            
    //         echo '<br>';              
    //     }    
    //     fclose($handle);
    // }
    // $row = 1;
    // $count = 193;
    // if (($handle = fopen("./csv/A.csv", "r")) !== FALSE) {
    //     while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    //         $num = count($data);             
    //         echo $data[0] . " " . $count . " pic" . $row;  
    //         if($row == 1){
    //             $sql = "UPDATE product SET pic1='$data[0]' WHERE id='$count'";
    //             if(mysqli_query($conn, $sql)){
    //                 echo "update" . $data[0] . " to pic1 where " . $count;
    //                 echo " Success";
    //             }
    //         }
    //         if($row == 2){
    //             $sql = "UPDATE product SET pic2='$data[0]' WHERE id='$count'";
    //             if(mysqli_query($conn, $sql)){
    //                 echo "update" . $data[0] . " to pic1 where " . $count;
    //                 echo " Success";
    //             }
    //         }
    //         if($row == 3){
    //             $sql = "UPDATE product SET pic3='$data[0]' WHERE id='$count'";
    //             if(mysqli_query($conn, $sql)){
    //                 echo "update" . $data[0] . " to pic1 where " . $count;
    //                 echo " Success";
    //             }
    //         }
    //         if($row == 4){
    //             $sql = "UPDATE product SET pic4='$data[0]' WHERE id='$count'";
    //             if(mysqli_query($conn, $sql)){
    //                 echo "update" . $data[0] . " to pic1 where " . $count;
    //                 echo " Success";
    //             }
    //         }
    //         if($row == 5){
    //             $sql = "UPDATE product SET pic5='$data[0]' WHERE id='$count'";
    //             if(mysqli_query($conn, $sql)){
    //                 echo "update" . $data[0] . " to pic1 where " . $count;
    //                 echo " Success";
    //             }
    //         }
    //         echo $row;
    //         if($row == 5){
    //             $row = 0;                
    //             $count++;
    //         }            
    //         $row++;            
    //         echo '<br>';                      
    //     }
    //     fclose($handle);
    // }
    
    // $count = 192;
    // if (($handle = fopen("./csv/data2.csv", "r")) !== FALSE) {
    //     while (($data = fgetcsv($handle, 100000, ",")) !== FALSE) {
    //         if($count > 192){
    //             echo $data[0];                                
                
    //             echo '<br>';                   
    //             echo "--------------------------------------------------------------------------------------------------------------------------------------------";                
    //             echo '<br>';                          

    //             $sql = "UPDATE product SET des1='$data[0]', des2='$data[1]' WHERE id='$count'";
    //             if(mysqli_query($conn, $sql)){                
    //                 echo "Add $row[0] to database is success";
    //                 echo '<br>';                   
    //                 echo "--------------------------------------------------------------------------------------------------------------------------------------------";                
    //                 echo '<br>';                          
    //             }
    //         }
    //         $count++;
            
    //     }    
    //     fclose($handle);
    // }
?>