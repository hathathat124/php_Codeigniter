<!DOCTYPE html>
<html>
<head>
	<title>URL helper</title>
</head>
<body>

    <div>
        <?php
        echo "<h2>URL helper </h2>";
        echo site_url();
        echo "<br/>";
        echo site_url("url/show/123");
        echo "<br/>";
        
        $segment = array('url','show','123');
        echo site_url($segment);
        ?>
        
    </div>
</body>
</html>
