<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <div class="diago detail-actualites">
        <div class="inverse content-actualites">
            <?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || !$page && $title): ?>
                <header>
                    <?php print render($title_prefix); ?>
                    <?php if ($title): ?>
                        <h1<?php print $title_attributes; ?>><?php print $title; ?></h1>
                    <?php endif; ?>
                    <?php print render($title_suffix); ?>
                </header>
            <?php endif; ?>
            <?php print render($content); ?>
        </div>
    </div>
</article>
