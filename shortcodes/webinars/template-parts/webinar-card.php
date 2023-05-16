<?
$post = $args['post'];
$post_id = $post->ID;
$title = get_the_title($post_id);
$link = get_the_permalink($post_id);
$excerpt = get_the_excerpt($post_id);
$date = get_field('webinar_date', $post_id) ?? '';
$image = get_the_post_thumbnail( $post_id, 'webinar-thumb');
?>
<div class="custom-webinar tatsu-column  tatsu-bg-overlay tatsu-one-fourth">
    <div class="tatsu-column-inner ">
        <div class="tatsu-column-pad-wrap">
            <div class="tatsu-column-pad">
                <div class="tatsu-single-image tatsu-module align-center tatsu-image-lazyload tatsu-external-image webinar-img-container">
                    <div class="tatsu-single-image-inner">
                        <?= $image;?>
                    </div>
                </div>
                <div class="tatsu-module tatsu-text-block-wrap webinar-wrap">
                    <div class="tatsu-text-inner tatsu-align-center  clearfix">
                        <p class="webinar-title"><?= get_the_title($post_id);?></p>
                    </div>
                </div>
                <div class="tatsu-module tatsu-text-block-wrap webinar-wrap">
                    <div class="tatsu-text-inner tatsu-align-center  clearfix">
                        <p class="webinar-description"><?= $excerpt;?></p>
                    </div>
                </div>
                <? if($date){ ?>
                    <div class="tatsu-module tatsu-text-block-wrap webinar-wrap">
                        <div class="tatsu-text-inner tatsu-align-center  clearfix">
                            <p class="webinar-date"><?= $date;?></p>
                        </div>
                    </div>
                <? } ?>
                <div class="tatsu-module tatsu-normal-button tatsu-button-wrap align-block block-left">
                    <a class="tatsu-shortcode smallbtn tatsu-button left-icon circular bg-animation-none btn-warning" href="<?= $link;?>">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>