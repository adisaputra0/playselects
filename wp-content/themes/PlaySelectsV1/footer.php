<?php get_sidebar();?>
</div>
<footer id="footer" role="contentinfo">
<hr>
<div class="text-footer">
<div id="copyright">
Copyright &copy; <?php echo esc_html(date_i18n(__('Y', 'blankslate'))); ?> - All rights reserved
</div>
<?=do_shortcode('[footer-icons]')?>
</div>
<a href="#" class="backtotop"><span></span>/\</a>
</footer>
</div>
<?php wp_footer();?>
</body>
</html>