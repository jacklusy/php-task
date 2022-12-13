<?php 

echo ("____________________ 1 Q _____________________") . ("<br>") . ("<br>");

echo strtolower("WelcomE to My worLd !!") . ("<br>");
echo strtoupper("WelcoME to my woRld !!") . ("<br>") . ("<br>");
echo ("____________________ 2 Q _____________________") . ("<br>") . ("<br>");

echo lcfirst("welcome to my world !!") . ("<br>");
echo ucwords("welcome to my world !!") . ("<br>") . ("<br>");

echo ("____________________ 3 Q _____________________") . ("<br>") . ("<br>");

$str1= '082307'; 
echo substr(chunk_split($str1, 2, ':'), 0, -1) . ("<br>") . ("<br>");

echo ("____________________ 4 Q _____________________") . ("<br>") . ("<br>");


echo ("____________________ 5 Q _____________________") . ("<br>") . ("<br>");

$path = 'www.example.com/public_html/index.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."\n" . ("<br>") . ("<br>"); // "index.php"

echo ("____________________ 6 Q _____________________") . ("<br>") . ("<br>");

$mailid  = 'rayy@example.com';
$user = strstr($mailid, '@', true);
echo $user."\n" . ("<br>") . ("<br>");

echo ("____________________ 7 Q _____________________") . ("<br>") . ("<br>");

$str1 = 'rayy@example.com';
echo substr($str1, -3)."\n" . ("<br>") . ("<br>");

echo ("____________________ 8 Q _____________________") . ("<br>") . ("<br>");

function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  echo password_generate(7)."\n" . ("<br>") . ("<br>");

echo ("____________________ 8 Q _____________________") . ("<br>") . ("<br>");

echo ("____________________ 9 Q _____________________") . ("<br>") . ("<br>");

$str1 = 'football';
$str2 = 'footboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"' . ("<br>") . ("<br>"),
$str_pos, $str1[$str_pos], $str2[$str_pos]) . ("<br>") . ("<br>");


echo ("____________________ 10 Q _____________________") . ("<br>") . ("<br>");

echo ("____________________ 11 Q _____________________") . ("<br>") . ("<br>");

$cha = 'a';
$next_cha = ++$cha; 
if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha."\n";














