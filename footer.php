        <footer>
            <p>This is my footer</p>
            <!-- Calling the menu named secondary on our footer -->
            <?php wp_nav_menu(array('theme_location' => 'secondary')); ?>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>