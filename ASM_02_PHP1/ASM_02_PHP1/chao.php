<style>
.sang {

    color: yellow;
    float: right;
    font-size: 20px;
    padding-right: 20px;
    font-family: Arial, Helvetica, sans-serif;

}

.chieu {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 20px;
    color:red;

}
</style>
<?php 
         $h = gmdate("H") + 7;
    ?>
<div>
    <?php
           
            if($h <=12){
                echo "<span class='sang'> Bây giờ là $h giờ sáng ! Chúc bạn buổi sáng vui vẻ  <span> "; 
            }else{
                echo " <span class='chieu' > Lúc này là $h giờ chiều! Chúc buổi chiều bạn vui vẻ </span>";
            };
        ?>
</div>