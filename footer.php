</main>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.mask.min.js" type="text/javascript"></script>

<?php if (is_page('pessoas') == true) { ?>
    <script src = "<?php echo get_stylesheet_directory_uri(); ?>/assets/js/pages/pessoas.js" type = "text/javascript"></script>
<?php } else {
    
} ?>
<?php if (is_page('cadastro-de-veiculos') == true) { ?>
    <script src = "<?php echo get_stylesheet_directory_uri(); ?>/assets/js/pages/veiculos.js" type = "text/javascript"></script>
<?php } else {
    
} ?>
<?php wp_footer(); ?>
</body>
</html>
