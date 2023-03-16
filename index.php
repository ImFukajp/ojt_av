<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asets/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asets/css/style.css">
    <title>Amelican vilage</title>
    <!-- <?php wp_head(); ?>ワードプレスのheaderここですよ -->
</head>
<body>
    <?php get_header(); ?>
    <main>
        <section>
            <spann class="sub-title">Latest Articles</span>
                <div class="card card-skin">
                    <div class="card-imgframe">
                        <div class="card-textbox">
                            <div class="card-date">
                                <p>2018/5/20</p>
                            </div>
                            <div class="card-overviewtext">
                                <h2>おしゃれカフェがありますよ。</h2>
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
                            <p>2018/5/19</p>
                        </div>
                        <div class="card-overviewtext">
                            <h2>あのネオンはいつ交換するのか！？観覧車の謎に迫る！</h2>
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
                            <p>2018/5/18</p>
                        </div>
                        <div class="card-overviewtext">
                            <h2>ラソナの社内はこんなのよ</h2>
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
                            <p>2018/5/27</p>
                        </div>
                        <div class="card-overviewtext">
                            <h2>お隣のアラハはハワイ？</h2>
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
                            <p>2018/5/16</p>
                        </div>
                        <div class="card-overviewtext">
                            <h2>なぜテント？ラソナの人に聞いてみた</h2>
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
                            <p>2018/5/15</p>
                        </div>
                        <div class="card-overviewtext">
                            <h2>ベイエリアおしゃれすぎる問題</h2>
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
                <!-- <section>
                    <div class="card card-skin">
                        <div class="card-imgframe">
                            <div class="card-textbox">
                                <div class="card-date">
                                    <?php //echo get_the_date(); 
                                    ?>
                                </div>
                                <h2 class="card-overviewtext"><?php //the_title(); 
                                                                ?></h2>
                                <div class="read-mark">
                                    <li class='read-more'>READ MORE</li>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->
            <?php
            endwhile;
        else :
            ?>
            <!-- <section>
                <div class="card card-skin">
                    <div class="card-imgframe">
                        <div class="card-textbox">
                            <p class="day"><?php //get_the_date(); ?></p>
                            <div class="card-overviewtext">
                                概要がはいります。概要がはいります。概要がはいります。概要がはいります。
                                <div class="read-mark">
                                    <li class='read-more'>READ MORE</li>
                                </div>
                            </div>
                        </div>
                    </div>
            </section> -->
        <?php endif; ?>
    </main>
    <!-- フッターの読み込み -->
    <?php get_footer(); ?>