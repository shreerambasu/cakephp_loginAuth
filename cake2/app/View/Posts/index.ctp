<h1> Blog Posts </h1>
<?php echo $this->Html->link(
    'Add Post',
    array('controller' => 'Posts', 'action' => 'add')
); ?>
<table class="table">
	 <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Actions</th>
        <th scope="col"></th>
        <th scope="col">Created</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($posts as $post): ?>
    <tr>
    	<td><?php echo $post['Post']['id']; ?> </td>
    	<td>
    		<?php echo $this->Html->link($post['Post']['title'], array('controller'=>'Posts', 'action'=>'view', $post['Post']['id'])); ?>
    	</td>
    	<td>
    		<?php echo $this->Html->link('Edit', array('action'=>'edit', $post['Post']['id'])); ?>
    	</td>
    	<td>
    		<?php echo $this->Form->postLink('Delete', array('action'=>'delete', $post['Post']['id']), array('confrim'=> 'Are you Sure?')); ?>
    	</td>
    	<td><?php echo $post['Post']['created']; ?></td>
    </tr>

    <?php endforeach; ?>
    <?php unset($post); ?>
</table>