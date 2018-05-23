<html>
    <body>
        <h3> :: ฟอร์มรับข้อมูล </h3>
        <?php
        echo validation_errors();
        echo form_open('form/check');
        
        echo "Username : <br/>";
        echo form_input('username')."<br/>";
        
        echo "Password : <br/>";
        echo form_password('password')."<br/>";
        
        echo "Password Confirm : <br/>";
        echo form_password('passconf')."<br/>";
        
        echo "E-mail Address : <br/>";
        echo form_input('email')."<br/>";
        
        echo form_submit('mysubmit','Submit');
        echo form_reset('myreset','Reset');
        
        echo form_close();
        
        ?>
        
    </body>

</html>







