<html><body>
    
        
        <h3> :: Add Member :: </h3>
        
        <?php
        echo validation_errors();
        echo form_open('start/insert2');
        echo "ชื่อ : <br/>";
        echo form_input('fname',set_value('fname'))."<br>";
        echo "นามสกุล : <br>";
        echo form_input('lname', set_value("lname"))."<br><br>";
        
        echo form_submit('mysubmit','Submit');
        echo form_reset('myreset','Reset');
        echo form_close();
        
        
?>               
</body></html>