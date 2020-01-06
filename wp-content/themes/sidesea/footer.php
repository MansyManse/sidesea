<?php
/**
 * Default Footer Template
 *
 */
?>

<footer class="site-footer" role="contentinfo">
    <div id="socialmedia">
      <a href="<?php echo get_option('client_behance_url'); ?>"><i class="fab fa-behance fa-3x" title="Behance"></i></a>
      <a href="<?php echo get_option('client_linkedin_url'); ?>"><i class="fab fa-linkedin-in fa-3x" title="LinkedIn"></i></a>
      <a href="<?php echo get_option('client_instagram_url'); ?>"><i class="fab fa-instagram fa-3x" title="Instagram"></i></a>
      <a href="<?php echo get_option('client_facebook_url'); ?>"><i class="fab fa-facebook-f fa-3x" title="Facebook"></i></a>
    </div>
    <div id="copyright-wrapper">
      <span class="copyright">&copy; <?php echo date( 'Y' ); ?> <?php echo get_bloginfo( 'name' ); ?></span>
    </div>
</footer>

<?php wp_footer(); ?>

<?php
// don't track admins or editors and google analytics option is filled in
if ( ! current_user_can( 'edit_pages' ) && get_option( 'client_google_analytics' ) ) :
    $analytics_id = get_option( 'client_google_analytics' ); ?>

    <!-- Google Universal Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', '<?php echo $analytics_id; ?>', 'auto');ga('send', 'pageview');
    </script>
<?php endif; ?>

</body>
</html>
