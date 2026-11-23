<footer class="site-footer">
    <div class="container footer-inner">

        <div>
            <a href="<?php echo esc_url(home_url('/')); ?>"
               class="logo footer-logo">
                <?php echo esc_html(get_bloginfo('name')); ?>
            </a>

            <p>Разрабатываем современные цифровые решения.</p>
        </div>

        <div class="footer-copy">
            &copy; <?php echo esc_html(date('Y')); ?>
            <?php echo esc_html(get_bloginfo('name')); ?>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>