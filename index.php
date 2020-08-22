<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<link rel="stylesheet"  href="style.css">
<title>タイトル</title>
<script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>

<?php require "practice.php";?>

    
<h2>課題１</h2>
<p><?php echo double(3);?></p>
<br>
<h2>課題２</h2>
<p><?php echo f(3,5);?></p>
<br>
<h2>課題３</h2>
<p><?php echo multiply($arr)?></p>
<br>
<h2>課題４</h2>
<p><?php echo max_array($arr)?></p>
<h2>課題４</h2>
<p><?php echo strip_tags($str);?></p>
<p><?php print_r($sports)?></p>
<p><?php print_r($classes)?></p>




    
    
</body>