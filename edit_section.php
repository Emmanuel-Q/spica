<?php
    include('includes/header.php');
    include('includes/sidebar.php');
    include('includes/navbar.php');
    include('../functions.php');

    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
        // Retrieve the section ID from the URL
        $sectionId = $_GET['id'];

        // Fetch the section details from the database
        $section = get_section_by_id($sectionId);
    }

    ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="">
            <?php
                // Check if the section exists
                if ($section) {
                    // Display the form to edit the section
                    ?>
            <h2 class="text-center">Edit Section</h2>
            <a href="sections.php" class="btn btn-primary">Back</a>
            <form method="POST" action="../update_section.php" enctype="multipart/form-data">
                <input type="hidden" name="section_id" value="<?php echo $section['id']; ?>">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name:<span class="required-field">*</span></label>
                            <input type="text" class="form-control" name="name" value="<?php echo $section['name']; ?>"
                                required>
                                <small class="text-muted">Enter your section name eg. Testimonial, Our Services, etc</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Page:</label>
                            <select name="page_id" class="form-control" required>
                                <?php
                                        // Fetch all pages from the database
                                        $pages = get_all_pages();

                                        foreach ($pages as $page) {
                                            $selected = ($page['id'] == $section['page_id']) ? 'selected' : '';
                                            echo "<option value='" . $page['id'] . "' $selected>" . $page['title'] . "</option>";
                                        }
                                        ?>
                            </select>
                            <small class="text-muted">Select a page to add the section to</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Content:<span class="required-field">*</span></label>
                            <textarea name="content" id="editor" class="form-control" rows="5"
                                required><?php echo $section['content']; ?></textarea>
                                <small class="text-muted">You can add anything and format the content here using the Editor</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Image:</label>
                            <input type="file" class="form-control" name="image">
                            <?php if (!empty($section['image'])) : ?>
                            <img src="../<?php echo $section['image']; ?>" alt="Current Image" class="img-fluid">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Publish:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="publish" value="1"
                                    <?php echo ($section['published'] == 1) ? 'checked' : ''; ?>>
                                <label class="form-check-label">Publish Section</label>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-success" type="submit">Update Section</button>
            </form>
            <?php
                } else {
                    echo "Section not found";
                }
                ?>
        </div>

        <br><br>
        <?php include('includes/footer.php'); ?>