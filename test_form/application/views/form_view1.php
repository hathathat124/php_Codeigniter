<html>
    
    
    <body>
        <h3>:: ฟอร์มรับข้อมูลจากผู้ใช้ :: </h3>
        <?php
        echo form_open('form/send');
        echo "input: ".form_input('xinput')."<br/>";
        echo "Textarea:<br/>".form_textarea('xtextarea')."<br/>";
        echo "Radio : ";
        echo form_radio('xradio','M')."Male";
        echo form_radio('xradio','F')."Female<br/><br/>";
        
        echo "Checkbox : ";
        echo form_checkbox('xcheckbox1','R')."Read Book";
        echo form_checkbox('xcheckbox2'.'F')."Play Football <br/><br/>";
        
        echo "Drop Down : ";
        $options = array('1' =>'Red',
            '2' =>'Blue',
            '3' =>'Green'
            ,'4' =>'Black',);
        echo form_dropdown('xdropdown',$options,'3')."<br/>";
        
        echo "Hidden : ".form_hidden('xhidden','1234').'<br/><br/>';
           
        
        echo form_submit('mysubmit','Submit');
        echo form_reset('myreset','Clear');
        echo form_close();
        ?>
        
        
        
        
        <form action="http://localhost/test_form/index.php/form/send" method="post">
            <input type="text" name="xinput" value=""/>
                   <input type="text" name="xinput" value=""/>
                   
                   <input type="password" name="xpassword" value=""/>
                   <textarea name ="xtextarea" cols="40" rows="10"></textarea>
        </form>
        
        
    </body>
</html>