<footer>
    <?php $footer = get_field('footer', 360); ?>
    <div class="icon-container-large">
        <div class="icon-container">
            <?php foreach ($footer['footer_icons'] as $icons) : ?>
                <a href="<?php echo $icons['link']; ?>" target="_blank">
                    <?php echo $icons['icon']; ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
    <?php if (get_the_ID() === 360) : ?>
        <div class="page-container footer">
            <div class="page-content">
                <div class="large-paragraf-container home-page">
                   <?php echo get_field('description_footer'); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="terms-text-container">
        <div class="terms-text">
            <p><?php echo get_field('footer_copyright', 360); ?></p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>




