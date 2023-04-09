<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-lg-6">

        <div class=" main-card card o-hidden border-0 shadow-lg my-5">
            <div style="background-color: #fcf1d5;" class="card-body p-0 ">
                <!-- Nested Row within Card Body -->

                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 style="font-weight:bold;" class="h4 text-gray-900 mb-4">Set Jadwal Wawancara</h1>
                            </div>

                            <?php if(validation_errors()) :?>
                                <div style="font-size: 10px;" class="alert alert-danger" role="alert">
                                    <?php echo validation_errors();?>
                                </div>
                            <?php endif;?>
                            <form class="" method="post">
                                <div class="mb-3">
                                    <input name="no_pendaftaran" value="<?= $lamaran['no_pendaftaran'];?>" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                                </div>
                               <fieldset disabled="disabled">
                                
                                <div class="mb-3">
                                    <input name="nama" value="<?= $lamaran['nama'];?>" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                                </div>
                                <div class="mb-3">
                                    <input name="nik" value="<?= $lamaran['nik'];?>" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                                </div>
                                
                               </fieldset>
                               <div class="form-group">
                                    <input name="jadwal" type="date" class="form-control form-control-user"
                                        id="jadwal" value="<?= $lamaran['jadwal'];?>"placeholder="Jadwal Wawancara">
                                </div>
                                <hr>
                                
                                <button style="background-color: #fa7758; color: white;" type="submit" name="ubah" class="btn btn-user btn-block">
                                   Save Changes
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>