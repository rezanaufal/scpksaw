<!-- Signup modal content -->
<div id="tambah-mahasiswa" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <h2 class=" text-center m-b-30">
                    Tambah Karyawan
                </h2>

                <form id="tambah-mahasiswa" data-table-target="table-mahasiswa"  class="form-horizontal" action="{{route('admin.mahasiswa.add')}}" method="POST">
                <fieldset id="fieldset">
                    <div class="form-group m-b-25">
                        <div class="col-12" id="message">
                            
                        </div>
                    </div>

                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="username">Nama</label>
                            <input class="form-control" name="nama" type="text" id="name" required="" placeholder="Nama Lengkap">
                        </div>
                    </div>

                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="emailaddress">NIP</label>
                            <input class="form-control" name="nim" type="text" id="email" required="" placeholder="NIP">
                        </div>
                    </div>
                    
                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="emailaddress">Grooming</label>
                            <input class="form-control" name="prestasi" type="text" id="email" required="" placeholder="Grooming Karyawan">
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="emailaddress">Attitude</label>
                            <input class="form-control" name="bahasa_asing" type="text" id="email" required="" placeholder="Attitude Karyawan">
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                                <div class="col-12">
                                    <label for="emailaddress">Self Confidence</label>
                                    <input class="form-control" name="karya_ilmiah" type="text" id="email" required="" placeholder="Self Confidence Karyawan">
                                </div>
                    </div>
                    <div class="form-group m-b-25">
                            <div class="col-12">
                                <label for="emailaddress">Jumlah Izin</label>
                                <input class="form-control" name="ipk" type="text" id="email" required="" placeholder="Jumlah Izin Karyawan">
                            </div>
                    </div>
                    <div class="form-group account-btn text-center m-t-10">
                        <div class="col-12">
                            <button class="btn w-lg btn-rounded btn-primary waves-effect waves-light" type="submit">Tambah</button>
                        </div>
                    </div>
                </fieldset>
                </form>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->