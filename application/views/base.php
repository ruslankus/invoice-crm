<!DOCTYPE HTML>
<html>
<head>
    
     <?php foreach ($styles as $file_style): ?>
        <?=HTML::style($file_style)?>
    <?php endforeach?>
    
    <?php foreach ($scripts as $file_script):?>
        <?=HTML::script($file_script)?>
    <?php endforeach ?>

<title>MY CMR</title>
</head>
<body>
<?=$center?>


</body>
</html>
