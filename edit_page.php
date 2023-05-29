<?php 
    include('includes/header.php');
    include('includes/sidebar.php');
    include('includes/navbar.php');
    include('../functions.php');

    // Retrieve the page data based on the ID
    $pageId = $_GET['id']; 
    $page = get_page_by_id($pageId);

    if (!$page) {
        // Handle the case when the page is not found
        echo "Page not found.";
        exit;
    }
?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="">
            <?php
            // Check if the page exists
            if ($page) {
                // Display the form to update the page
                ?>
                <h2 class="text-center">Edit Page</h2>
                <a href="pages.php" class="btn btn-primary">Back</a>
                <form method="POST" enctype="multipart/form-data" action="../update_page.php">
                    <input type="hidden" name="page_id" value="<?php echo $page['id']; ?>">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="url">URL:<span class="required-field">*</span></label>
                                <input type="text" name="url" id="url" class="form-control" value="<?php echo $page['url']; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Title:<span class="required-field">*</span></label>
                                <input type="text" name="title" id="title" class="form-control" value="<?php echo $page['title']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="header">Header:<span class="required-field">*</span></label>
                                <textarea name="header" id="header" class="form-control" required><?php echo $page['header']; ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="footer">Footer</label>
                                <textarea name="footer" id="footer" class="form-control"><?php echo $page['footer']; ?></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="banner">Banner Image:<span class="required-field">*</span></label>
                                <input type="file" name="banner" id="banner" class="form-control">
                                <?php if (!empty($page['banner'])) : ?>
                                    <img src="../<?php echo $page['banner']; ?>" alt="Banner Image" class="img-fluid">
                                <?php endif; ?>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Publish:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="publish" value="1" <?php echo ($page['published'] == 1) ? 'checked' : ''; ?>>
                                    <label class="form-check-label">Publish Section</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Update Page</button>
                </form>
            <?php
            } else {
                echo "Page not found";
            }
            ?>
        </div>
    <!-- </div>
</div> -->

<br>
<?php include('includes/footer.php'); ?>
