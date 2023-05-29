<?php 
  include('includes/header.php');
  include('includes/sidebar.php');
  include('includes/navbar.php');
  include('../functions.php');
  
?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="container">
            <form action="../section.php" method="post" enctype="multipart/form-data">
                <h2>Create Section</h2>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Name:<span class="required-field">*</span></label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="image">Image:</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="content">Content:<span class="required-field">*</span></label>
                    <textarea name="content" id="editor" class="form-control" required></textarea>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="page_id">Page:</label>
                        <select name="page_id" id="page_id" class="form-control" required>
                            <?php
                    $result = $conn->query("SELECT id, title FROM pages");
                    while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['id'] . "'>" . $row['title'] . "</option>";
                    }
                    ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="publish">Publish:</label>
                        <div class="form-check">
                            <input type="checkbox" name="publish" id="publish" class="form-check-input">
                            <label class="form-check-label" for="publish">Publish this section</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Create Section</button>
            </form>
        </div>

    </div>
<!-- </div> -->

<?php include('includes/footer.php'); ?>