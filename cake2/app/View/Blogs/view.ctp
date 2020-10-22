<h1><?php echo h($blog['Blog']['title']); ?></h1>

<p><small>Author: <?php echo $blog['Blog']['author']; ?></small></p>

<p><?php echo h($blog['Blog']['contain']); ?></p>

<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($blog['Blog']['img']); ?>" width="50" height="50" />


<p>Created: <?php echo h($blog['Blog']['created']); ?></p>
<p> Modified: <?php echo h($blog['Blog']['modified']); ?></p>

<p><?php echo $this->Html->link('Back', array('action'=> 'index')); ?></p>