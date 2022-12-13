<?php 

phpinfo();
echo('<br>');
print("Tomorrow I 'll learn PHP global variables.");
echo('<br>');
print("This is a bad command: del c:.");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method='POST'>
        <label>user name</label>
        <input type="text" name="name">
        <input type="submit">
    </form>

    <?php
    $name = $_POST['name'];
    echo ("<h3> Hello $name </h3>");
    ?>

</body>
</html> 


<?php
echo 'User IP Address '. $_SERVER['REMOTE_ADDR'];
?>

<?php
$current_file_name = basename($_SERVER['PHP_SELF']);
echo $current_file_name."\n";
?>

<?php
$url = 'https://github.com/jacklusy?tab=repositories';
$url=parse_url($url);
echo 'Scheme : '.$url['scheme']."\n";
echo 'Host : '.$url['host']."\n";
echo 'Path : '.$url['path']."\n";
?>


<?php
$text = 'PHP Tutorial';
$text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
echo $text;
?>


<?php
header('Location: https://github.com/jacklusy?tab=repositories');
?>

