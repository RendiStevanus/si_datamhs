<div class="container">
  <h4 class="mt-2">List of Peoples</h4>

  <div class="row">
    <div class="col-md">
      <form action="<?= base_url('peoples'); ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search Keyword..." name="keyword">
          <div class="input-group-append">
            <input class="btn btn-primary" type="submit" name="submit">
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="row">
    <div class="col-md-10">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($peoples as $people) :  ?>
            <tr>
              <th><?= ++$start; ?></th>
              <td><?= $people['name']; ?></td>
              <td><?= $people['email']; ?></td>
              <td>
                <a href="" class="badge badge-warning">detail</a>
                <a href="" class="badge badge-success">ubah</a>
                <a href="" class="badge badge-danger">delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?= $this->pagination->create_links(); ?>
    </div>
  </div>
</div>