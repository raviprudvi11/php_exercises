<?php
$bckcolor ="transparent";
if(array_key_exists("bckcolor",$_GET))
{
    $bckcolor=$_GET["bckcolor"];
}

?>
<html>
    <style>
    background-color:<?php echo($bckcolor)?>;
    
     </style>
</html>
