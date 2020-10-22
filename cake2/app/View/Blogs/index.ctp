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
        <th scope="col">Created</th>
        <th scope="col">Modified</th>
        <th scope="col">Action</th>
        <th scope="col"></th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($blogs as $blog): ?>
    <tr>
    	<td><?php echo $blog['Blog']['id']; ?> </td>
    	<td>
    		<?php echo $this->Html->link($blog['Blog']['title'], array('controller'=>'Blogs', 'action'=>'view', $blog['Blog']['id'])); ?>
    	</td>
    	<td>
    		<?php echo $blog['Blog']['author']; ?>
    	</td>
    	<td>
    		<?php echo $blog['Blog']['created']; ?>
    	</td>
    	<td>
    		<?php echo $blog['Blog']['modified']; ?>
    	</td>
    	<td>
    		<?php echo $this->Html->link('Edit', array('action'=>'edit', $blog['Blog']['id'])); ?>
    	</td>
    	<td>
    		<?php echo $this->Form->postLink('Delete', array('action'=>'delete', $blog['Blog']['id']), array('confrim'=> 'Are you Sure?')); ?>
    	</td>
    </tr>

    <?php endforeach; ?>
    <?php unset($post); ?>
</table>