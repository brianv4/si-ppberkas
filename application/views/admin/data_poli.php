<!-- DataTales Example -->
<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newPoliModal">Tambah Poli</a>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Poli</th>
                    <th>Nama Petugas</th>
                    <th>No_HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama Poli</th>
                    <th>Nama Petugas</th>
                    <th>No_HP</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Gigi</td>
                    <td>Edinburgh</td>
                    <td>085xxxxxxxxx</td>
                    <td>
                        <button class="btn btn-sm btn-primary">Edit</button>
                        <button class="btn btn-sm btn-danger">hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="newPoliModal" tabindex="-1" role="dialog" aria-labelledby="newPoliModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newPoliModalLabel">Tambah Poli</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php base_url('admin/data_poli/tambah'); ?>" method="post">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Poli</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_poli" id="nama_poli" class="form-control" placeholder="Nama Poli">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Petugas</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_petugas" id="nama_petugas" class="form-control" placeholder="Nama Petugas">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">No HP</label>
                        <div class="col-sm-10">
                            <input type="text" name="no_hp" id="no_hps" class="form-control" placeholder="No Handphone">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</div>