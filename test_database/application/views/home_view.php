<html>
    <body>
        <h3> :: สมาชิกทั้งหมด :: </h3>
        
        
        <?php 
        echo anchor('start/insert','เพิ่มสมาชิก')."<br><br>";
        if($query->num_rows() > 0)
        {
            echo "<table border='1'>
                <tr bgcolor='#dcdcdc'>
                    <td>รหัสผู้ใช้</td>
                    <td>ชื่อ</td>
                    <td>นามสกุล</td>
                    <td>แก้ไข</td>
                    <td>ลบ</td>
                </tr>";
            foreach($query->result_array() as $row)
            {
                $id=$row['id'];
                $fname=$row['fname'];
                $lname=$row['lname'];
                $update=anchor('start/update/'.$id,'แก้ไข');
                $attributs="onclick=\"return confirm('คุณแน่ใจที่จะลบข้อมูลออกจากระบบ?')\"";
                
                $delete=anchor('start/delete/'.$id,'ลบ',$attributs);
                
                echo "<tr>
                 <td>$id</td>
                    <td>$fname</td>
                        <td>$lname</td>
                        <td>$update</td>
                        <td>$delete</td>
                 ";      
            }
            echo "</table>";
                
        }
        
        ?>
    </body>
</html>