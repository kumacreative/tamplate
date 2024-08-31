<!-- privacy-policy -->
<?php get_header(); ?>
<h1>プライバシーポリシー</h1>

<div>id<?php the_ID() ?></div>
<div><?php the_guid() ?></div>
<div><?php 	the_permalink() ?></div>
<div>タイトル：<?php the_title() ?></div>
<div>要約：<?php the_excerpt() ?></div>
<div>本文：<?php the_content() ?></div>
<div>投稿日：<?php the_data() ?></div>
<div>投稿時刻：<?php the_time() ?></div>
<div>更新日：<?php the_modified_date() ?></div>
<div>本文：<?php the_content() ?></div>
<div>投稿者：<?php the_author() ?></div>
<div>投稿者：<?php the_category() ?></div>
<div>投稿者：<?php the_post_thumbnail() ?></div>

<?php get_footer(); ?>
