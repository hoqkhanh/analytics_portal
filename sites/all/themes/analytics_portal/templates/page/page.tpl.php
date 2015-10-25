    <?php if ($tabs): ?><?php print render($tabs); ?><?php endif; ?>
    <?php print render($tabs2); ?>
    <?php print $messages; ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
    <?php
        echo render($page['content']);
    ?>
