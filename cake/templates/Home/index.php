<div class="sorts">
     <span class="sort">Organizar por:</span>
     <span class="sort">
          <?php echo $this->Paginator->sort('firstName', 'Nome'); ?>
     </span>
     <span class="sort">
          <?php echo $this->Paginator->sort('lastName', 'Sobrenome'); ?>
     </span>
</div>

<ul>
     <?php foreach ($users as $user) : ?>
         
          <li><?php echo $user->id ?>: <?php echo $user->firstname; ?>  <?php echo $user->lastName;?> | posts:<?php echo count($user->posts) ?></li>
     <?php endforeach; ?>


</ul>

<ul class="pagination">
     <?php
     echo $this->Paginator->first();
     echo $this->Paginator->prev();
     echo $this->Paginator->numbers();
     echo $this->Paginator->next();
     echo $this->Paginator->last();

     ?>
     <?= $this->Paginator->counter('range'); ?>
     <?= $this->Paginator->counter('pages'); ?>


</ul>