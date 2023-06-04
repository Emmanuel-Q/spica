<?php 
  include('includes/header.php');
  include('includes/sidebar.php');
  include('includes/navbar.php');
  include('../functions.php');
?>

<div class="main-panel">
  <div class="content-wrapper">
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
              <td><?php echo substr($section['content'], 0, 60); ?></td>
              <td><?php echo $section['image']; ?></td>
              <td><?php echo $section['page_title']; ?></td>
              <td><?php echo $section['published']; ?></td>
              <td>
                <a href="edit_section.php?id=<?php echo $section['id']; ?>" title="Edit" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                <a href="#" class="btn btn-sm btn-danger" title="Delete" data-toggle="modal" data-target="#deleteModal<?php echo $section['id']; ?>"><i class="bi bi-trash3"></i></a>
              </td>
            </tr>

            <!-- Delete Modal -->
            <div class="modal fade" id="deleteModal<?php echo $section['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel<?php echo $section['id']; ?>" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel<?php echo $section['id']; ?>">Confirm Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>Are you sure you want to delete this section?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <a href="../delete_section.php?id=<?php echo $section['id']; ?>" class="btn btn-danger">Delete</a>
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

<?php include('includes/footer.php'); ?>
