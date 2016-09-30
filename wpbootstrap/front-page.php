<?php get_header() ?>
<section>
    <div class="jumbotron text-center">
        <h1><?php echo get_theme_mod('showcase_heading', 'YAY I build a theme'); ?></h1>
        <p><?php echo get_theme_mod('showcase_text', 'Easiest tutorials ever @ kaloraat.com'); ?></p>
        <a class="btn btn-primary btn-lg" href="<?php echo get_theme_mod('btn_url'); ?>"><?php echo get_theme_mod('btn_text', 'Learn more'); ?></a>
    </div>
</section>
<article> 
    <div class="boxes">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?php if(is_active_sidebar('box1')) : ?>
                      <?php dynamic_sidebar('box1'); ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-4">
                    <?php if(is_active_sidebar('box3')) : ?>
                      <?php dynamic_sidebar('box3'); ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-4">
                    <?php if(is_active_sidebar('box2')) : ?>
                      <?php dynamic_sidebar('box2'); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</article>
<?php get_footer(); ?>