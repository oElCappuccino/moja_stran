<?php
if (!defined('varovalka')) {
    exit('403');
}
?>
<section id="mission" class="section-mission">
    <h1><?php echo strtoupper($mission_data['title']); ?></h1>
    <div class="mission-container">
        <div class="mission-left">
            <h2>KDO SMO</h2>
            <p><?php echo $mission_data['content']; ?></p>
            <button>Preberite več</button>
        </div>
        <div class="mission-right">
            <img src="<?php echo $mission_data['image']; ?>" alt="Slika misije">
        </div>
    </div>
</section>
