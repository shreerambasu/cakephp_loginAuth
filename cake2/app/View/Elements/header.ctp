
<head>

  <?= $this->Html->charset() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Post - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <?= $this->Html->css('bootstrap.min.css') ?>
	<?= $this->Html->css('login.css') ?>
  <!-- Custom styles for this template -->
  <?= $this->Html->css('blog-post.css') ?>

</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <?= $this->Html->link('ホーム', array('controller'=>'Home', 'action'=>'index'), array('class'=>'navbar-brand')) ?>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <!-- display or hide based on user logged in -->
			<?php
				if($this->Session->check('Auth.User'))
				{
					echo '<li class="nav-item active">';
					echo $this->Html->link( "ログアウト",   array('controller'=>'Users','action'=>'logout'), array('class'=>'nav-link') );
	          		echo '</li>';

	          		echo '<li class="nav-item active">';
					echo $this->Html->link( "ユーザ情報",   array('controller'=>'Users','action'=>'index'),array('class'=>'nav-link') );
	          		echo '</li>';
				}else{
					echo $this->Html->link('ログイン', array('controller'=>'Users', 'action'=>'index'), array('class'=>'nav-link'));
				}
			?>
		<!-- display or hide based on user logged in -->
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
          <?= $this->Html->link('ブログ', array('controller'=>'Posts', 'action'=>'index'), array('class'=>'nav-link')) ?>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>