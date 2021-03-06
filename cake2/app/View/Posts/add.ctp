<h1> Blog Posts </h1>
<?php echo $this->Html->link(
    'Add Blogs',
    array('action' => 'add')
); ?>
<table class="table">
	 <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col">Contain</th>
        <th scope="col">Image</th>
        <th scope="col">Created</th>
        <th scope="col">Modified</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($blogs as $blog): ?>
    <tr>
    	<td><?php echo $post['Blog']['id']; ?> </td>
    	<td>
    		<?php echo $this->Html->link($post['Blog']['title'], array('controller'=>'Blogs', 'action'=>'view', $blog['Blog']['id'])); ?>
    	</td>
    	<td>
    		<?php echo $this->Html->link('Edit', array('action'=>'edit', $blog['Blog']['id'])); ?>
    	</td>
    	<td>
    		<?php echo $this->Form->postLink('Delete', array('action'=>'delete', $blog['Blog']['id']), array('confrim'=> 'Are you Sure?')); ?>
    	</td>
    	<td><?php echo $blog['Blog']['created']; ?></td>
    	<td><?php echo $blog['Blog']['modified']; ?></td>
    </tr>

    <?php endforeach; ?>
    <?php unset($post); ?>
</table>