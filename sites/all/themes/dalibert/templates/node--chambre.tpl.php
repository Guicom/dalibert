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
                        <h1<?php print $title_attributes; ?>><a clas="test" href="<?php print $node_url; ?>"><?php print $title; ?></a></h1>
                    <?php endif; ?>
                    <?php print render($title_suffix); ?>

                    <?php if ($display_submitted): ?>
                        <p class="submitted">
                            <?php print $user_picture; ?>
                            <?php print $submitted; ?>
                        </p>
                    <?php endif; ?>

                    <?php if ($unpublished): ?>
                        <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
                    <?php endif; ?>
                </header>
            <?php endif; ?>

            <?php print render($content); ?>
        </div>
        <div class="photos">
            <a href="#">Voir les photos</a>
        </div>
    </div>
</article>
