<h1>Add Post</h1>
<?php
echo $this->Form->create('Blog', array('enctype' => 'multipart/form-data'));
echo $this->Form->input('title');
echo $this->Form->input('author');
echo $this->Form->input('contain', array('rows' => '3'));
echo $this->Form->file('img');
echo $this->Form->end('Save Blog');
?>
<p><?php echo $this->Html->link('Back', array('action'=> 'index'), array('style'=>'color:#000000;')); ?></p>