<?php
if (!defined('varovalka')) {
    exit('403');
}
?>
<section id="news" class="section-news">
    <h1>LATEST NEWS</h1>
    <div id="latest-news-container">
        <?php foreach ($news_articles as $article) : ?>
            <article>
                <img src="<?php echo $article['image']; ?>" alt="<?php echo $article['title']; ?>">
                <h2><?php echo $article['title']; ?></h2>
                <p><?php echo $article['content']; ?></p>
                <hr>
            </article>
        <?php endforeach; ?>
    </div>
</section>
