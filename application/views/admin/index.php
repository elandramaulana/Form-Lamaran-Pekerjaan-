      

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?=$title ?></h1>

                    <div class="row">
                        <div class="col-lg-6">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jadwal</th>
                                <th scope="col">Lulus</th>
                                <th scope="col">Jadwal Wawancara</th>
                                <th scope="col">Kelulusan</th>
                                <th scope="col">Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($list_lamaran as $row) : ?>
                                    <tr>
                                        <td><?= $row['no_pendaftaran'] ?></td>
                                        <td><?= $row['nama'] ?></td>
                                        <td><?= $row['jadwal'] ?></td>
                                        <td><?= $row['lulus'] ?></td>
                                        <td>
                                        <a type="text-decoration:none" href="<?= site_url('Jadwal/setjadwal/' . $row['no_pendaftaran']) ?>">Set Jadwal</a>
                                        </td>
                                        <td>
                                        <a type="text-decoration:none" href="<?= site_url('Kelulusan/setkelulusan/' . $row['no_pendaftaran']) ?>">Set</a>
                                        </td>
                                        <td>
                                        <a type="text-decoration:none" href="<?= site_url('Detail/view/' . $row['no_pendaftaran']) ?>">view</a>
                                        </td>
                                        <!-- tambahkan kolom-kolom lain yang akan ditampilkan -->
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                 

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Atur Jadwal Wawancara</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <form method="post" action="<?=base_url('jadwal/setjadwal')?>">
                                <fieldset disabled="disabled">
                                 <table>
                                            <td>
                                                <input
                                                name="jadwal"
                                                type="date"
                                                maxlength="50"
                                                style="width: 100%; max-width: 260px"
                                                /><?= form_error('jadwal',' <small class="text-danger pl-3">', '</small>');?>
                                            </td>
                                        </table>
                                    <div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </fieldset>
                            </form>
                           
                        </div>
                       
                        </div>
                    </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
