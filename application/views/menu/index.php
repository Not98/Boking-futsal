  <!-- Begin Page Content -->
  <div class="container-fluid ">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-900"><?= $titel ?> User</h1>

      <div class="row ">
          <div class="clo-lg-6">
              <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

              <?= $this->session->flashdata('message'); ?>
              <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#exampleModal">
                  Launch demo modal
              </button>
              <table class="table table-hover table-dark">
                  <thead>
                      <tr>
                          <th scope="col">#</th>
                          <th scope="col">Menu</th>
                          <th scope="col">Actin</th>

                      </tr>
                  </thead>
                  <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($menu as $mm) : ?>
                      <tr>
                          <th scope="row"><?= $i ?></th>
                          <td><?= $mm['menu']; ?></td>
                          <td>
                              <a href="" class="badge badge-primary">edit</a>
                              <a href="" class="badge badge-secondary">delet</a>
                          </td>
                      </tr>
                      <?php $i++ ?>
                      <?php endforeach; ?>
                  </tbody>
              </table>

          </div>
      </div>


  </div>
  <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->

  <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form action="<?= base_url('menu') ?>" method="post">
                      <div class="form-group">
                          <label for="formGroupExampleInput">Example label</label>
                          <input type="text" class="form-control" id="menu" placeholder="Example input" name="menu">
                      </div>

              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Add</button>
              </div>
              </form>
          </div>
      </div>
  </div>