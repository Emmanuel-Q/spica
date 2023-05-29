
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
                            <th>Name</th>
                            <th>Content</th>
                            <th>Image</th>
                            <th>Page</th>
                            <th>Published</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <h2>All Sections</h2>
                        <?php
                        // Fetch all sections with corresponding page titles from the database
                        $sections = get_all_sections_with_page_titles();

                        foreach ($sections as $section) {
                            ?>
                            <tr>
                                <td><?php echo $section['id']; ?></td>
                                <td><?php echo $section['name']; ?></td>
                                <td><?php echo substr($section['content'], 0,60); ?></td>
                                <td><?php echo $section['image']; ?></td>
                                <td><?php echo $section['page_title']; ?></td>
                                <td><?php echo $section['published']; ?></td>
                                <td>
                                    <a href="edit_section.php?id=<?php echo $section['id']; ?>" title="Edit" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                                    <a href="delete_section.php?id=<?php echo $section['id']; ?>" class="btn btn-sm btn-danger" title="Delete" onclick="return confirm('Are you sure you want to delete this section?')"><i class="bi bi-trash3"></i></i></a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>

            </div>


 <br><br>
        <!-- content-wrapper ends -->

<?php include('includes/footer.php'); ?>