<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>ssss</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>TODO write content</div>
        <?php 
        echo heading("html helper",1);
        echo img('images/hero.jpg');
        $test = array(
            'src' => 'images/hero.jpg',
            'width'=>'150',
            'height'=>'150',
            'title' =>'sky'
            );
        echo img($test);
        echo "Hello";
        
        ?>
    </body>
</html>
