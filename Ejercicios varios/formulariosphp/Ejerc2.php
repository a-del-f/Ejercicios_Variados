<?php 
if(isset($_GET["num"]))
{if($_GET["num"]>=18){
    ?><p>Es mayor de edad</p> <?php

}else if($_GET["num"]<18) 
    {?><p>Es menor de edad</p> <?php }
 } ?>