<section class="hero fullpage">
    <video class="hero__banner-video" muted autoplay loop>
		<source src="<?php echo bloginfo( 'template_directory' )."/bg/aven.mp4";?>" type="video/mp4">
	</video>
    <div class="hero__banner-overlay"></div>
    <div class="hero__content container">
        <div class="hero__sub-title">
            <?php if( get_field('sub_title', 'options')):?>
                <p><?= get_field( 'sub_title', 'options' )?></p>
            <?php else:?>
                <p>Please say something to your website.</p>
            <?php endif;?>
        </div>
        <div class="hero__title">
            <?php if( get_field('title', 'options')):?>
                <h1><?= get_field( 'title', 'options' )?></h1>
            <?php else:?>
                <h1>Please say something to your website.</h1>
            <?php endif;?>
        </div>
        <div class="hero__desc">
            <?php if( get_field('description', 'options')):?>
                <?= get_field('description', 'options');?>
            <?php else:?>
                <p>Please say something to your website.</p>
            <?php endif;?>
        </div>
    </div>
</section>