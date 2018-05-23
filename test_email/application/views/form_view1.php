<html><body>
        <h3 style="color : red"> :: FORM EMAIL ::</h3>
        <?php
        
        echo validation_errors();
        echo form_open('email/send');
        
        echo "To : <br/>";
        echo form_input('to')."<br>";
        
        echo "Subject : <br>";
        echo form_input('subject')."<br>";
        
        echo "Message : <br>";
        echo form_textarea('message').'<br>';
        
        echo form_submit('mysubmit','Submit');
        echo form_reset('myreset','Reset');
        
        echo form_close();
        ?>
        
        
        
    </body></html>