<aside class="sidebar">
  <?php if (is_active_sidebar('main-sidebar')) : ?>
    <?php dynamic_sidebar('main-sidebar'); ?>
  <?php else: ?>
    <p>This is the sidebar. You can add widgets from the WordPress admin.</p>
  <?php endif; ?>
</aside>
