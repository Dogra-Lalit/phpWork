
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
<?php
function generateCarousel($carouselItems){
    ob_start();
    if($carouselItems){
        $first = true;
        foreach($carouselItems as $key => $data){ $activeClass = $first ? 'active' : '';$first = false;?>
               <div class="carousel-item <?= $activeClass ?>" data-bs-interval="<?= $data['interval']?>">
                   <img src="<?= $data['image']?>" class="d-block w-100" alt="...">
                   <div class="carousel-caption d-none d-md-block">
                       <h5><?= $data['caption']?></h5>
                       <p><?= $data['desc']?></p>
                   </div>
               </div>
               <?php }
    }
    
    ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<?php $contentC = ob_get_clean(); return $contentC; }

?>