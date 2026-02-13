<?php

/**
 * Template Part: 投稿一覧のループ
 * 
 * front-page.php と index.php で共通利用
 */
?>


<section id="post-<?php the_ID(); ?>" <?php post_class('cardList_item'); ?>>
    <a href="<?php the_permalink(); ?>" class="card">

        <!-- カテゴリー-->
        <?php
        $categories = get_the_category();
        if ($categories):
        ?>
            <div class="card_label">
                <?php foreach ($categories as $category): ?>
                    <span class="label label-black"><?= $category->name; ?></span>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <!-- アイキャッチ画像-->
        <div class="card_pic">
            <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('medium'); ?>
            <?php else: ?>
                <img src="<?= get_template_directory_uri(); ?>/assets/img/common/noimage.png" alt="">
            <?php endif; ?>
        </div>

        <div class="card_body">
            <!-- タイトル -->
            <h2 class="card_title"><?php the_title(); ?></h2>

            <!-- 投稿日時 -->
            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?>更新</time>
        </div>
    </a>
</section>