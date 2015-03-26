<div id="comments">
<?php if ( !empty($post->post_password) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
<?php _e('[ Enter your password to view comments... ]'); ?>
<?php return; endif; ?>
<?php $commentcount=1; // number of first comment ?>

<h3>
<?php comments_number(__('No Comments'), __('1 Comment'), __('% Comments')); ?> 
<?php if ( comments_open() ) : ?><a href="#postcomment" title="<?php _e("Leave a Comment"); ?>">&raquo;</a>
<?php endif; ?>
</h3>

<h3>
<?php comments_rss_link(__('<abbr title="Really Simple Syndication">RSS</abbr> feed for comments on this post')); ?> | 
<?php if ( pings_open() ) : ?><a href="<?php trackback_url() ?>" rel="trackback" title="Trackback">
<?php _e('TrackBack <abbr title="Uniform Resource Identifier">URI</abbr>'); ?></a>
<?php endif; ?>
</h3>

<?php if ( $comments ) : ?>
<?php foreach ($comments as $comment) : ?>

<h4 id="comment-<?php comment_ID() ?>">
<a href="#comment-<?php comment_ID() ?>"><?php echo $commentcount++; ?></a> | 
<?php comment_type(__('Comment'), __('Trackback'), __('Pingback')); ?>
<?php _e('by'); ?> <?php comment_author_link() ?> | 
<?php comment_date() ?><?php edit_comment_link(__("Edit"), ' |'); ?>
</h4>
<?php comment_text() ?>

<?php endforeach; ?>
<?php endif; ?>

<?php if ( comments_open() ) : ?>

<h3 id="suggest"><?php _e('Suggest a Comment &raquo;'); ?></h3>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<h4>You must be 
<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment...</h4>

<?php else : ?>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<?php if ( $user_ID ) : ?>
<h4>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php">
<?php echo $user_identity; ?></a> | 
<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('log out of this account') ?>">Logout</a> &raquo;</h4>

<?php else : ?>
<p><input name="author" type="text" id="author" tabindex="1" value="<?php echo $comment_author; ?>" size="33" maxlength="77" />
<label for="author"> &laquo; name <?php if ($req) _e('(required)'); ?></label></p>
<p><input name="email" type="text" id="email" tabindex="2" value="<?php echo $comment_author_email; ?>" size="33" maxlength="77" />
<label for="email"> &laquo; e-mail <?php if ($req) _e('(required'); ?> &amp; never published)</label></p>
<p><input name="url" type="text" id="url" tabindex="3" value="<?php echo $comment_author_url; ?>" size="33" maxlength="77" />
<label for="url"> &laquo; website address (optional)</label></p>

<?php endif; ?>
<p><textarea name="comment" id="comment" cols="50" rows="7" tabindex="4"></textarea></p>
<p><input name="submit" type="submit" id="submit" tabindex="5" value="Post Comment &raquo;" /></p>
<p><input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>
<p><input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>
<?php do_action('comment_form', $post->ID); ?>
</form>

<p><strong>Allowed <abbr title="eXtensible Hypertext Markup Language">XHTML</abbr> Tags:</strong>
<small><?php echo allowed_tags(); ?></small></p>

<?php endif; // If registration required and not logged in ?>
<?php else : // Comments are closed ?>
<h4><?php _e('Sorry, the comment form is closed at this time.'); ?></h4>
<?php endif; ?>
</div>