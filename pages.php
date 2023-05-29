
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
                        <h2>All Pages</h2>
                        <?php
                            // Fetch all pages from the database
                            $pages = get_all_pages();

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
                                        <a href="edit_page.php?id=<?php echo $page['id']; ?>" title="Edit" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                                        <a href="../delete_page.php?id=<?php echo $page['id']; ?>" title="Delete" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this page?')"><i class="bi bi-trash3"></i></a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
               
            </div>


 
        <!-- content-wrapper ends -->
<br>
<?php include('includes/footer.php'); ?>