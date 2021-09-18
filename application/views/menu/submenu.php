  <!-- Begin Page Content -->
  <div class="container-fluid ">


      <h1 class="h3 mb-2 text-gray-800">Tables</h1>
      <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more
          information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
              DataTables documentation</a>.</p>
      <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

      <?= $this->session->flashdata('message'); ?>
      <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#exampleModal">
          Launch demo modal
      </button>
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Taitle</th>
                              <th>menu</th>
                              <th>Url</th>
                              <th>Icon</th>
                              <th>Status</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tfoot>
                          <tr>
                              <th>No</th>
                              <th>Taitle</th>
                              <th>menu</th>
                              <th>Url</th>
                              <th>Icon</th>
                              <th>Status</th>
                              <th>Action</th>
                          </tr>
                      </tfoot>
                      <tbody>
                          <?php $i = 1; ?>
                          <?php foreach ($subMenu as $mm) : ?>
                          <tr>
                              <th scope="row"><?= $i ?></th>
                              <td><?= $mm['titel']; ?></td>
                              <td><?= $mm['menu']; ?></td>
                              <td><?= $mm['url']; ?></td>
                              <td><?= $mm['icon']; ?></td>

                              <?php if ($mm['is_active'] == 1) : ?>
                              <td>Active</td>
                              <?php else : ?>
                              <td>Not Active</td>
                              <?php endif; ?>



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
                  <form action="<?= base_url('menu/submenu') ?>" method="post">
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