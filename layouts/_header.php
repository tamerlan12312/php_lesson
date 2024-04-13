<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- isset() bir seyin olub olmadigini yoxlayir yeni null deyilse true olacaqdir -->
    <title>
        <?php if(isset($title)) echo $title." | " ;?>        
    test.com
</title>
</head>
<body>
    <div id="header" style="background-color:red">
        Header
    </div>