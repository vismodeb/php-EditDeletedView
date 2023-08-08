<?php

  require_once('confige.php');

  if(isset($_POST['reg_submit'])){
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $registration = $_POST['registration'];
    $phone = $_POST['phone'];
    $status = $_POST['status'];

    if(empty($name)){
      $error = 'Name is Required!';
    }
    else if(empty($roll)){
      $error = 'Roll is Required!';
    }
    else if(empty($registration)){
      $error = 'Registration is Required!';
    }
    else if(empty($phone)){
      $error = 'Phone Number is Required!';
    }

    else{
      $statement = $connection->prepare('INSERT INTO st_data(name,roll,registration,phone,status) VALUES(?,?,?,?,?)');
      $result = $statement->execute(array($name,$roll,$registration,$phone,$status));

      if($result == true){
        unset($_POST);
        $success = 'Data insert Successfully!';
      }
      else{
        $error = 'Data insert Failed!';
      }
    }
  }

  function if_value($name){
    if(isset($_POST[$name])){
      echo $_POST[$name];
    }
  }

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
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
            <a class="nav-link active" href="insert.php">Insert Data</a>
          </div>
        </div>
      </div>
    </nav>

    <div class="form_area mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <div class="card">
              <div class="card-body">
                <h2 class="text-center border-bottom pb-2">Registration Form</h2>
                
                <?php if(isset($error)):?>
                  <div class="alert alert-danger">
                    <?php echo $error; ?>
                  </div>
                <?php endif; ?>

                <?php if(isset($success)):?>
                  <div class="alert alert-success">
                    <?php echo $success; ?>
                  </div>
                <?php endif; ?>

                <form action="" method="POST">
                  <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo if_value('name'); ?>">
                  </div>
                  <div class="mb-3">
                    <label for="roll" class="form-label">Roll</label>
                    <input type="number" class="form-control" id="roll" name="roll" value="<?php echo if_value('roll'); ?>">
                  </div>
                  <div class="mb-3">
                    <label for="registration" class="form-label">Registration</label>
                    <input type="number" class="form-control" id="registration" name="registration" value="<?php echo if_value('registration'); ?>">
                  </div>
                  <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="number" class="form-control" id="phone" name="phone" value="<?php echo if_value('phone'); ?>">
                  </div>
                  <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" name="status" id="status">
                      <option value="1">Active</option>
                      <option value="0">Inactive</option>
                    </select>
                  </div>
                  <button type="submit" name="reg_submit" class="btn btn-primary">Submit</button>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>