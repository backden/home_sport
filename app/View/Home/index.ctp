<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of index
 *
 * @author My PC
 */
echo $message;
?>

<form action="home/post" method="post">
<input type="text" name="content" />
<input type="submit" value="submit" />
</form>


<h1><?php echo $message; ?></h1>
