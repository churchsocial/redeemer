        </div>
    </div>

    <?php if (get_theme_mod('church_address')): ?>
        <div id="address">
            <strong>Our Location:</strong>
            <?=get_theme_mod('church_address')?>
        </div>
    <?php endif ?>

    <div id="copyright">
        <p class="church">
            &copy; Copyright <?=date('Y')?> <?php bloginfo('blogname')?>
        </p>
        <p class="software">
            Powered by <a href="http://churchsocialapp.com" title="Church Management Software">Church Social</a>
        </p>
    </div>
</div>

<script src="<?php bloginfo('template_url') ?>/js/all.js?v=<?=wp_get_theme()->get('Version')?>"></script>

<?php wp_footer() ?>

</body>
</html>