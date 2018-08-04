<p>Here is a list of all posts:</p>

<?php foreach($posts as $post) { ?>
  <p>
    <?php echo $post->author; ?>
    <a href='?controller=user&action=show&id=<?php echo $user->username; ?>'>See content</a>
  </p>
<?php } ?>