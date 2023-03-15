
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <title>Amelican Vilage</title>
   <?php wp_head(); ?>
</head>

<body>
<?php get_header(); ?>
<section>
    <spann class="sub-title">Latest Articles</span>
        <div class="card card-skin">
            <div class="card-imgframe">
            <div class="card-textbox">
                <div class="card-date">
                    date here
                </div>
                <div class="card-overviewtext">
                    概要がはいります。概要がはいります。概要がはいります。概要がはいります。
                    <div class="read-mark">
                    <li class='read read-line'>READ MORE</li>
                    </div>
                </div>
            </div>
        </div>
</section>
<section>
        <div class="card card-skin">
            <div class="card-imgframe">
            <div class="card-textbox">
                <div class="card-date">
                    date here
                </div>
                <div class="card-overviewtext">
                    概要がはいります。概要がはいります。概要がはいります。概要がはいります。
                    <div class="read-mark">
                    <li class='read read-line'>READ MORE</li>
                    </div>
                </div>
            </div>
        </div>
</section>
<section>
        <div class="card card-skin">
            <div class="card-imgframe">
            <div class="card-textbox">
                <div class="card-date">
                    date here
                </div>
                <div class="card-overviewtext">
                    概要がはいります。概要がはいります。概要がはいります。概要がはいります。
                    <div class="read-mark">
                    <li class='read read-line'>READ MORE</li>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php if (have_posts()) :
      while (have_posts()) :
        the_post();
    ?>
<section>
        <div class="card card-skin">
            <div class="card-imgframe">
            <div class="card-textbox">
                <div class="card-date">
                <?php echo get_the_date(); ?>
                </div>
                <h2 class="card-overviewtext"><?php the_title(); ?></h2>
                    <div class="read-mark">
                    <li class='read-more'>READ MORE</li>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php
      endwhile;
    else :
      ?>
<section>
        <div class="card card-skin">
            <div class="card-imgframe">
            <div class="card-textbox">
                <div class="card-date">
                    date here
                </div>
                <div class="card-overviewtext">
                    概要がはいります。概要がはいります。概要がはいります。概要がはいります。
                    <div class="read-mark">
                    <li class='read-more'>READ MORE</li>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php endif; ?>
</main>
  <!-- フッターの読み込み -->
  <?php get_footer(); ?>