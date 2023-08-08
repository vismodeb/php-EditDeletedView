<?php 
  require_once('confige.php');

  $stmt = $connection->prepare("SELECT * FROM st_data ORDER BY id DESC");
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  // echo '<pre>';
  // print_r($result);
  // echo '</pre>';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VISMO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="index.php">VISMO_DEV</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            <a class="nav-link" href="insert.php">Insert Data</a>
          </div>
        </div>
      </div>
    </nav>

    <div class="form_area mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <div class="card">
              <div class="card-body">
                <h2 class="mb-4">All Student Data</h2>

                <?php if(isset($_REQUEST['success'])):?>
                  <div class="alert alert-success">
                    <?php echo $_REQUEST['success'];?>
                  </div>
                <?php endif; ?>

                <table class="table table-bordered">
                  <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Roll</th>
                    <th>Registration</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>

                  <?php $i=1; foreach($result as $row): ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['roll'] ?></td>
                    <td><?php echo $row['registration'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
                    <td>
                      <?php
                        if($row['status'] == 1){
                          echo "<span class='badge bg-success'>Active</span>";
                        }
                        else{
                          echo "<span class='badge bg-danger'>inactive</span>";
                        }
                      ?>
                    </td>
                    <td>
                      <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Edit</a>
                      <a href="view.php?id=<?php echo $row['id'] ?>" class="btn btn-warning">View</a>
                      <a onclick="return confirm('Are You Sure?');" href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                  <?php $i++; endforeach; ?>

                </table>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>