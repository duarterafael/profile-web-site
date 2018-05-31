<?php include 'header.php' ?>
    <body>
    <div id="exTab2" class="container">	
    <ul class="nav nav-tabs">
          <li class="active">
            <a  href="#1" class='fa fa-home fa-lg' data-toggle="tab"></a>
          </li>
          <li>
            <a href="#2" class='fa fa-lg' data-toggle="tab">My history</a>
          </li>
          <li>
          <a href="#3" class='fa fa-lg' data-toggle="tab">Pasts jobs</a>
          </li>
          <li>
            <a href="#4" class='fa fa-lg' data-toggle="tab">My projects</a>
          </li>
        </ul>

          <div class="tab-content ">
            <div class="tab-pane active" id="1">
              <?php include './pages/home_page.php' ?>
            </div>
            <div class="tab-pane" id="2">
              <?php include './pages/my_history.php' ?>
            </div>
            <div class="tab-pane" id="3">
            <?php include './pages/pasts_jobs.php' ?>
            </div>
            <div class="tab-pane" id="4">
              <?php include './pages/my_projects.php' ?>
            </div>
          </div>
        
      </div>
     
      </body>
      <?php include 'footer.php' ?>
      