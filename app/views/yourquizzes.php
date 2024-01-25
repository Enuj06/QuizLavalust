<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Quizzes info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

</head>
<body>

<div class="container">
    <div class="info">
        <div class="col-md-12 mt-4">
            <div class="card">
            <div style="float: right; margin-top: 10px;">
                <button onclick="back()" class="btn btn-primary" style="margin-left: auto; margin-bottom: 10px;">← Back to quiz</button>
                <button onclick="confirmLogout()" class="btn btn-danger" style="margin-left: 82%; margin-bottom: 10px;">Log Out→</button>
            </div>

                <div class="card-header bg-primary text-warning">
                    <h3 style="text-align: center">Quiz Information</h3>
                </div>
                <div class="card-body bg-secondary">
                    <table class="table table-dark table-hover table-bordered text-center">
                        <thead class="bg-info text-white text-center">
                            <tr>
                                <th>ID</th>
                                <th>Quiz Title</th>
                                <th>Quiz Note</th>
                                <th>Quiz Question</th>
                                <th>Quiz Type</th>
                                <th>Quiz Answer</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-light text-white">
                        <?php foreach ($data as $info) : ?>
                            <tr>
                                <td><?= $info['id']; ?></td>
                                <td><?= $info['quiz_title']; ?></td>
                                <td><?= $info['quiz_note']; ?></td>
                                <td><?= $info['quiz_question']; ?></td>
                                <td><?= $info['quiz_type']; ?></td>
                                <td><?= $info['quiz_answer']; ?></td>
                                <td>
            <a class="btn btn-primary me-2" href="" data-bs-toggle="modal" data-bs-target="#editModal"
              data-bs-placement="top" title="Edit">
              <i class="fas fa-edit"></i>
            </a>
            <a class="btn btn-danger ms-2" href="<?= site_url('edit/' . $info['id']) ?>" data-bs-toggle="tooltip" data-bs-placement="top"
              title="Delete">
              <i class="fas fa-trash-alt"></i>
            </a>
          </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Confirmation -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Are you sure you want to delete this FAQ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger" @click="deleteConfirmed">Delete</button>
        </div>
      </div>
    </div>
  </div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    function back() {
        // Implement your logout logic here
        // For example, redirect the user to the logout page
        window.location.href = "/create_quiz";
    }

    function confirmLogout() {
        var isConfirmed = confirm("Are you sure you want to logout?");
        if (isConfirmed) {
            logout();
        }
    }
    function logout() {
        // Implement your logout logic here
        // For example, redirect the user to the logout page
        window.location.href = "/login";
    }
</script>
</body>
</html>