
    <?php 
    if(isset($_POST["num"])){
        $i=0;
         while($i<  $num=$_POST["num"]){
            ?><p>Los bucles son faciles</p><?php
            $i++;
         }
         ?><p>Se acabo</p> <?php
    }
    ?>
