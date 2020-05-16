<!DOCTYPE html>
<?php
$name = 'php page';
define('MY_NAME','my name');// Constant name is MY_NAME
define('MINUTES', 60 * 15);  // constant name is MINUTES and value is integer 
const RICH = true; // Constant name is Rich 


// php code at top of file.
?>
<html>
<body>
<header>

<h1> <?= $name ?></h1>
</header>
<main>
<?php
echo "this is the $name";
echo MY_NAME;
?> 
<p>It takes <?= MINUTES ?> minutes to come here ! </p>
<p> Your mortgae  level is <?= RICH?20000:10000?></p>
<?php if(RICH) { ?>
     <p>You are rich </p>
<?php } else {?>
    <p> Your level is low</p>
<?php } ?>
<?php if(RICH) {
    echo '<p>Your are at the top </p>';
}
else {
    echo '<p> Your are at the bottom </p>';
}
?>
<!-- looping -->
<?php
for ($i=0;$i < 5;$i++)
{
    echo '<span>', $i ,'</span>'; // '<p>' .$i . '</p>'

}
?>
<?php for($i=0;$i<5;$i++){?>
    <span><?= $i ?></span>
<?php } ?>
</main>
</body>
</html>