<?php 
  include('includes/header.php');
  include('includes/sidebar.php');
  include('includes/navbar.php');
  include('../functions.php');
  
?>

   
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Summary</h5>
              <div class="row">
                <div class="col-md-4">
                  <a href="pages.php" class="card-link">
                    <div class="card h-100">
                      <div class="card-body text-black">
                        <div class="row">
                          <div class="col-4 card-body-icon">
                            <i class="fas fa-globe fa-3x text-primary"></i> 
                          </div>
                          <div class="col-8 card-body-text">
                            <h4 class="card-subtitle">Total Pages</h4>
                            <h3 class="card-text"><?php echo $totalPagesCount; ?></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="active_pages.php" class="card-link">
                    <div class="card h-100">
                      <div class="card-body text-black">
                        <div class="row">
                          <div class="col-4 card-body-icon">
                            <i class="fas fa-globe fa-3x text-success"></i> 
                          </div>
                          <div class="col-8 card-body-text">
                            <h4 class="card-subtitle">Active Pages</h4>
                            <h3 class="card-text"><?php echo $publishedPagesCount; ?></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="unpublished_pages.php" class="card-link">
                    <div class="card h-100">
                      <div class="card-body text-black">
                        <div class="row">
                          <div class="col-4 card-body-icon">
                            <i class="fas fa-globe fa-3x text-info"></i>
                          </div>
                          <div class="col-8 card-body-text">
                            <h4 class="card-subtitle">Unpublished Pages</h4>
                            <h3 class="card-text"><?php echo $totalUnpublishedPagesCount; ?></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-md-4">
                  <a href="sections.php" class="card-link">
                    <div class="card h-100">
                      <div class="card-body text-black">
                        <div class="row">
                          <div class="col-4 card-body-icon">
                            <i class="fas fa-th fa-3x text-primary"></i> 
                          </div>
                          <div class="col-8 card-body-text">
                            <h4 class="card-subtitle text-black">Total Sections</h4>
                            <h3 class="card-text"><?php echo $totalSectionsCount; ?></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="active_sections.php" class="card-link">
                    <div class="card h-100">
                      <div class="card-body text-black">
                        <div class="row">
                          <div class="col-4 card-body-icon">
                            <i class="fas fa-th fa-3x text-success"></i> 
                          </div>
                          <div class="col-8 card-body-text">
                            <h4 class="card-subtitle">Active Sections </h4>
                            <h3 class="card-text"><?php echo $publishedSectionsCount; ?></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="unpublished_sections.php" class="card-link">
                    <div class="card h-100">
                      <div class="card-body text-black">
                        <div class="row">
                          <div class="col-4 card-body-icon">
                            <i class="fas fa-th fa-3x text-info"></i> 
                          </div>
                          <div class="col-8 card-body-text">
                            <h4 class="card-subtitle">Unpublished Sections</h4>
                            <h3 class="card-text"><?php echo $unpublishedSectionsCount; ?></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
      



    

        
       
        <!-- content-wrapper ends -->
<br><br><br><br><br><br>
<?php include('includes/footer.php'); ?>