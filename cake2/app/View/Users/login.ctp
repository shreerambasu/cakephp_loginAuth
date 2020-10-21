<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <?php echo $this->Session->flash('auth'); ?>

    <!-- Icon -->
    <div class="fadeIn first">
		<i class="fa fa-user" style='font-size:48px'></i>
    </div>

    <!-- Login Form -->
    <?php echo $this->Form->create('User'); ?>
    <?php
        	echo $this->Form->input('username');
        	echo $this->Form->input('password');
    ?>
    <?php echo $this->Form->end('ログイン', array('type'=>"submit", 'class'=>"fadeIn fourth")); ?>


    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">パスワード忘れた？</a>
    </div>
    <?php
	 echo $this->Html->link( "Add A New User",   array('action'=>'add') );
	?>

  </div>
</div>