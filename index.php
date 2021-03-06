<?php 

require 'db.php';

$sql = 'SELECT * FROM people';

$statement = $connection->prepare($sql);

$statement->execute();

$person = $statement->fetchAll(PDO::FETCH_OBJ);

?>

<?php require 'header.php'; ?>
  <div class="container">
      <div class="card mt-5">
          <div class="card-header">
              <h2>All Employee</h2>
          </div>

          <div class="col-md-12 mt-5 text-center">
           
            <form action="search.php" method="post" class="form-group">
              <input type="text" placeholder="Search" name="search" class="form-control">
            </form>
            
          </div>
      <div class="card-body">
          <table class="table table-bordered">
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Action</th>
            </tr>

            <?php foreach ($person as $people): ?>
              <tr>
                <td><?php echo $people->id; ?></td>
                <td><?php echo $people->name; ?></td>
                <td><?php echo $people->email; ?></td>
                <td>
                  <a href="edit.php?id=<?php echo $people->id; ?>" class="btn btn-info">Edit</a>
                  <a href="delete.php?id=<?php echo $people->id; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>

            <?php endforeach ?>
            

        </table>
      </div>
    </div>
  </div>
<?php require 'footer.php'; ?>