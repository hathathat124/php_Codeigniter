<html><body>
    
        
        <h3> :: แก้ไขสมาชิก :: </h3>
        
        <?php 
        $row =$query->row_array();
        $id=$row['id'];
        $fname =$row['fname'];
        $lname = $row['lname'];
        
        echo validation_errors();
        echo form_open('start/update2');
        
       echo "ชื่อ : <br/>";
       echo form_input('fname',$fname)."<br>";
       echo "นามสกุล : <br>";
       echo form_input('lname',$lname)."<br>";
       echo form_hidden('id',$id);
       echo form_submit('mysubmit','Submit');
       echo form_reset('myreset','Reset');
       echo form_close();
       
       
        ?>
    </body></html>