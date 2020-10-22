<!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

<!-- Blogs Loop START -->

        <?php foreach($blogs as $blog): ?>
        	<!-- title -->
	        <h3 class="mt-4"><?php echo h($blog['Blog']['title']); ?></h3>

	        <!-- Author -->
	        <small>by <a href="#"><?php echo h($blog['Blog']['author']); ?></a></small>

	        <!-- Date/Time -->
	        <p>Posted on: <?php echo h($blog['Blog']['created']); ?></p>
	        <hr>

	        <!-- Post Content -->
	        <p class="lead">
	        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($blog['Blog']['img']); ?>" class="img-fluid rounded" width="50" height="50" />
	        <?php echo h($blog['Blog']['contain']); ?>
	        </p>
		<?php endforeach; ?>
<!-- Blogs Loop END -->

<!-- Blogs Pagination START -->
		<div class="paginator">
		    <ul class="pagination">
		        <?= $this->Paginator->first('<<') ?> &nbsp;&nbsp;
		        <?= $this->Paginator->prev('Previous') ?>&nbsp;&nbsp;
		        <?= $this->Paginator->numbers() ?>&nbsp;&nbsp;
		        <?= $this->Paginator->next('Next') ?>&nbsp;&nbsp;
		        <?= $this->Paginator->last('>>') ?>&nbsp;
		    </ul>
		</div>
<!-- Blogs Pagination END -->


        <hr>
        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <!-- Single Comment -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </div>
        </div>


      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <a href="#">HTML</a>
                  </li>
                  <li>
                    <a href="#">Freebies</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">Tutorials</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
