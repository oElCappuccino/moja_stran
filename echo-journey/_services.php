<?php
if (!defined('varovalka')) {
    exit('403');
}
?>
<section id="services" class="section-services">
    <h1>STORITVE</h1>
    <div id="book-now-container">
        <?php foreach ($services as $service) : ?>
            <article>
                <img src="<?php echo $service['image']; ?>" alt="<?php echo $service['title']; ?>">
                <p><strong><?php echo $service['title']; ?></strong></p>
                <p><?php echo $service['description']; ?></p>
                <hr>
                <button>Rezerviraj zdaj</button>
            </article>
        <?php endforeach; ?>
    </div>
</section>
