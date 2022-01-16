<?php include 'includes/nav.php'; ?>
<?php if(isset($id_login)){?>
<table class="table table-success">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">ip</th>
      <th scope="col">OS</th>
      <th scope="col">browser</th>
      <th scope="col">device</th>
      <th scope="col">Time</th>
    </tr>
  </thead>
  <tbody>
      <?php 
      $query = mysqli_query($db , "SELECT * FROM `prey`");
      while($row = mysqli_fetch_assoc($query)){ ?>
    <tr>
      <th scope="row"><?php echo clear($row['id']); ?></th>
      <td><?php echo clear($row['ip']); ?></td>
      <td><?php echo clear($row['os']); ?></td>
      <td><?php echo clear($row['browser']); ?></td>
      <td><?php echo clear($row['device']); ?></td>
      <td><?php echo clear($row['time']); ?></td>
    </tr>
<?php } ?>
  </tbody>
</table>
<?php } ?>
<?php include 'includes/footer.php'; ?>