      

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?=$title ?></h1>

                    <div class="row">
                        <div class="col-lg-6">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">No Pendaftaran</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Nik</th>
                                <th scope="col">Jadwal Wawancara</th>
                                <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($list_lamaran as $row) : ?>
                                    <tr>
                                        <td><?= $row['no_pendaftaran'] ?></td>
                                        <td><?= $row['nama'] ?></td>
                                        <td><?= $row['nik'] ?></td>
                                        <td><?= $row['jadwal'] ?></td>
                                        <td>
                                            <?php if($row['lulus'] == "Lulus") :?>
                                                <h6 style="color:green; font-weight:bolder"><?= $row['lulus'] ?></h6>
                                            <?php else : ?>
                                                <h6 style="color:red; font-weight:bolder"><?= $row['lulus'] ?></h6>
                                            <?php endif ?>  

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
