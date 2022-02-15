<div class="restoCard">
<div class="restoCard--image">
    <?php if ($new) {echo "<span class=\"restoCard--image-new\"> Nouveau </span>";} ?>
    <img src=<?php echo $image ?> height="200px" >
</div>
<div class="restoCard--text">
    <p class="restoCard--text-title"> <?php echo $title ?> </p>
    <i class="fa-solid fa-heart"></i>
    <p class="restoCard--text-description"> <?php echo $description ?> </p>
</div>


