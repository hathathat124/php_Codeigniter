<html><body>
    
        <h3>:: แสดงข้อมูล :: </h3>
        
        <?php 
        if(($query->num_rows()>0)){
            echo "<table border='1'>
                 <tr>
                    <td>ลำดับ</td>
                    <td>หัวข้อ</td>
                 </tr>";
        foreach($query->result_array() as$row)
        {
            $id=$row['id'];
            $title=$row['title'];
            echo "<tr> <td>$id</td><td>$title</td></tr>";
            
        }
        }else{
            echo 'No Data';
            
        }
        ?>
        
    </body></html>