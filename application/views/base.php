<!DOCTYPE HTML>
<html>
<head>
    
     <?foreach ($styles as $file_style):?>
        <?=HTML::style($file_style)?>
    <?endforeach?>
    
    <?foreach ($scripts as $file_script):?>
        <?=HTML::script($file_script)?>
    <?endforeach?>

<title>MY CMR</title>
</head>
<body>
<?=$center?>


</body>
</html>
