<?php
$h2_color = "skyblue";
echo "<h1 style = 'color:green' >PHP with HTML</h1>";
echo "<h3 style = 'color:blue' >PHP with HTML</h1>";
?>
<?php
$name = "Uzair Baig";
echo "<h1 style = 'color:orange' >My name is $name</h1>";
?>
<h1 style = "color : red">
    My real name is <?php echo $name ?>
</h1>
<h2 style = "color:<?php echo $h2_color;?>" ><?php echo "This is h2 tag";?></h2>
<h2 style = "color:<?php echo $h2_color;?>" ><?php echo $name?></h2>
<h2 style = "color:<?php echo $h2_color;?>" >My name is <?php echo $name?></h2>