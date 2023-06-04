<?php 
  include('includes/header.php');
  include('includes/sidebar.php');
  include('includes/navbar.php');
  
?>


<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <!-- Section to create pages -->
        <div class="container"><br>
            <h2>Create Page</h2>
            <form action="../page.php" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="url">URL:<span class="required-field">*</span></label>
                        <input type="text" name="url" id="url" class="form-control" required
                            placeholder="Enter the URL">
                        <small class="text-muted">Example: about or contact</small>
                    </div>
                    <div class="col-md-6">
                        <label for="title">Title:<span class="required-field">*</span></label>
                        <input type="text" name="title" id="title" class="form-control" required placeholder="Home">
                        <small class="text-muted">Enter the title of your page eg. My CMS | home, My CMS | about us,etc.</small>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="header">Header:<span class="required-field">*</span></label>
                        <input type="text" name="header" id="header" class="form-control" required>
                        <small class="text-muted">Add the page header eg. Home, contact, about us, etc</small>
                    </div>
                    <div class="col-md-6">
                        <label for="footer">Footer:</label>
                        <input type="text" name="footer" id="footer" class="form-control">
                        <small class="text-muted">You can add your contact details here</small>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="banner">Banner:<span class="required-field">*</span></label>
                        <input type="file" name="banner" id="banner" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="publish">Publish:</label>
                        <div class="form-check">
                            <input type="checkbox" name="publish" id="publish" class="form-check-input">
                            <label class="form-check-label" for="publish">Publish this page</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Create Page</button>
            </form>
        </div>






        <!-- content-wrapper ends -->
        <br>
        <?php include('includes/footer.php'); ?>