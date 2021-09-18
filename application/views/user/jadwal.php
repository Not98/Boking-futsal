  <!-- Begin Page Content -->
  <div class="container-fluid">
      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800">Jadwal Putra Futsal</h1>
      <?php
        $id = $user['id'];
        $st = 2;
        $queryjadwal = "SELECT * FROM `jadwal` 
                          JOIN `jam` ON `jadwal`.`id_jam`= `jam`.`kode_jam`
                          JOIN `user` ON `jadwal`.`name_id`=`user`.`id`
                          JOIN `lapangan`ON `lapangan`.`id`=`jadwal`.`id_lapangan`
                          WHERE  `jadwal`.`name_id`=$id
                          ";
        $jadwal = $this->db->query($queryjadwal)->result_array();


        ?>

      <div class="row">

          <?php foreach ($jadwal as $j) : ?>



          <div class="col-xl-3 col-md-6 mb-4">
              <?php if ($j['status'] == 1) : ?>
              <div class="card border-left-info shadow h-100 py-2">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-info text-uppercase mb-2">Jadwal Putra
                                  Futsal
                              </div>
                              <?php else : ?>
                              <div class="card border-left-warning shadow h-100 py-2">
                                  <div class="card-body">
                                      <div class="row no-gutters align-items-center">
                                          <div class="col mr-2">
                                              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                  Jadwal Pending
                                              </div>
                                              <?php endif; ?>

                                              <p class="card-title mb-1">Name :<?= $j['name'] ?></p>
                                              <p class="card-text mb-1 ">lapangan :<?= $j['lapangan'] ?></p>
                                              <p class="card-text mb-1">Jam :<?= $j['jam'] ?></p>
                                          </div>
                                          <div class="col-auto">
                                              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <?php endforeach; ?>
                      </div>




                  </div>
                  <!-- /.container-fluid -->

              </div>
              <!-- End of Main Content -->