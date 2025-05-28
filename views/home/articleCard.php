<?php foreach ($articles as $article) : ?>
    <div class="article-container">
        <div class="article">
            <div class="article-img">
                <img src="<?= $article['imgURL'] ?>"
                    alt="">
            </div>
            <div class="tag"><?= $article['tag'] ?></div>
            <div class="text-content">
                <h3>
                    <?= $article['heading'] ?>
                </h3>
                <p><?= $article['body'] ?></p>
                <a class="btn" href="#">
                    Read More
                </a>
                <div class="user">
                    <span class="avatar">
                        <img src="<?= $article['authorImg'] ?>"
                            class="" alt="Netmatters ">
                    </span>
                    <div class="details">
                        <p><strong>Posted by <?= $article['author'] ?></strong> <br> 20th February
                            2025</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>