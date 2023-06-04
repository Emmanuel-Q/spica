<?php
    include('includes/header.php');
    include('includes/sidebar.php');
    include('includes/navbar.php');
    include('../functions.php');
?>

<!-- partial -->
<div class="main-panel">
    <!-- Section to view all pages -->
    <div class="content-wrapper">
        <div class="">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>URL</th>
                        <th>Header</th>
                        <th>Footer</th>
                        <th>Banner</th>
                        <th>Published</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <h2>Unpublished Pages</h2>
                    <?php
                        // Fetch only published pages from the database
                        $pages = get_unpublished_pages();

                        foreach ($pages as $page) {
                            ?>
                    <tr>
                        <td><?php echo $page['id']; ?></td>
                        <td><?php echo $page['title']; ?></td>
                        <td><?php echo $page['url']; ?></td>
                        <td><?php echo $page['header']; ?></td>
                        <td><?php echo $page['footer']; ?></td>
                        <td><?php echo $page['banner']; ?></td>
                        <td><?php echo $page['published']; ?></td>
                        <td>
                            <a href="edit_page.php?id=<?php echo $page['id']; ?>" title="Edit"
                                class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete" data-toggle="modal"
                                data-target="#deleteModal<?php echo $page['id']; ?>"><i class="bi bi-trash3"></i></a>
                        </td>
                    </tr>

                    <!-- Delete Modal -->
                    <div class="modal fade" id="deleteModal<?php echo $page['id']; ?>" tabindex="-1" role="dialog"
                        aria-labelledby="deleteModalLabel<?php echo $page['id']; ?>" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel<?php echo $page['id']; ?>">Confirm
                                        Delete</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete this page?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <a href="../delete_page.php?id=<?php echo $page['id']; ?>"
                                        class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>


        <!-- content-wrapper ends -->
        <br>
        <?php include('includes/footer.php'); ?>