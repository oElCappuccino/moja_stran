<?php
if (!defined('varovalka')) {
    exit('403');
}
?>
<section id="news" class="section-news">
    <?php
    $id = $_GET['id'] ?? null;
    $current_article = null;

    if ($id) {
        foreach ($news_articles as $article) {
            if ($article['id'] == $id) {
                $current_article = $article;
                break;
            }
        }
    }

    if ($current_article) : ?>
        <div class="article-detail">
            <h1><?php echo $current_article['title']; ?></h1>
            <img src="<?php echo $current_article['image']; ?>" alt="<?php echo $current_article['title']; ?>" class="detail-img">
            <div class="article-content">
                <?php echo nl2br($current_article['full_text']); ?>
            </div>
            <a href="?naloga=news" class="back-link">&larr; Nazaj na vse novice</a>
        </div>
    <?php else : ?>
        <h1>NOVICE</h1>
        <div id="latest-news-container">
            <?php foreach ($news_articles as $article) : ?>
                <article>
                    <img src="<?php echo $article['image']; ?>" alt="<?php echo $article['title']; ?>">
                    <h2><?php echo $article['title']; ?></h2>
                    <p><?php echo $article['content']; ?></p>
                    <a href="?naloga=news&id=<?php echo $article['id']; ?>" class="read-more">Preberi več</a>
                    <hr>
                </article>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>
