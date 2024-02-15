<ul>
     <?php foreach ($posts as $post) : ?>
          <!-- <?php var_dump($post) ?> -->
          <li><?php echo $post->id ?>: <?php echo $post->title ?> | author:<?php echo $post->user->firstname ?> -
               <?php echo $post->user->lastName ?>

          </li>
     <?php endforeach; ?>


</ul>
<hr>
<ul>
     <?php foreach ($users as $user) : ?>
          <!-- <?php var_dump($post) ?> -->
          <li><?php echo $user->id ?>: <?php echo $user->firstname ?> | posts:<?php echo count($user->posts) ?></li>
     <?php endforeach; ?>


</ul>