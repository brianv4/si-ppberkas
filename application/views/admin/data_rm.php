<!-- DataTales Example -->
<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRMModal">Tambah Rekam Medis</a>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No RM</th>
                    <th>NIK</th>
                    <th>Nama Pasien</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>No RM</th>
                    <th>NIK</th>
                    <th>Nama Pasien</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <td>1</td>
                <td>000001</td>
                <td>351000000000000</td>
                <td>Edinburg</td>
                <td>25/04/2000</td>
                <td>Laki-Laki</td>
                <td>
                    <button class="btn btn-sm btn-primary">Edit</button>
                    <a href="" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#newHistoryModal">History</a>
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </td>
            </tbody>
        </table>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="newRMModal" tabindex="-1" role="dialog" aria-labelledby="newRMModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newRMModalLabel">Tambah Rekam Medis</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="<?php base_url('admin/data_rm/tambah'); ?>" method="post">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">No Rekam Medis</label>
                        <div class="col-sm-10">
                            <input type="text" name="no_rm" id="no_rm" class="form-control" placeholder="No Rekam Medis">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" name="nik" id="nik" class="form-control" placeholder="NIK">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Pasien</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_pasien" id="nama_pasien" class="form-control" placeholder="Nama Pasien">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" name="tgllahir" id="tgllahir" class="form-control" placeholder="Nama Pasien">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select name="jkkel" class="form-control">
                                <option value="">- Pilih Jenis Kelamin -</option>
                                <option value="">- Laki - Laki -</option>
                                <option value="">- Perempuan -</option>
                            </select>
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
<!-- Modal -->
<div class="modal fade" id="newHistoryModal" tabindex="-1" role="dialog" aria-labelledby="newHistoryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newHistoryModalLabel">History Rekam Medis</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No RM</th>
                                        <th>Nama Pasien</th>
                                        <th>Nama Poli</th>
                                        <th>Tanggal Pinjam</th>
                                        <th>Tanggal Kembali</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>No RM</th>
                                        <th>Nama Pasien</th>
                                        <th>Nama Poli</th>
                                        <th>Tanggal Pinjam</th>
                                        <th>Tanggal Kembali</th>
                                        <th>Status</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>000001</td>
                                        <td>Edinburg</td>
                                        <td>Gigi</td>
                                        <td>18/04/2023</td>
                                        <td>-</td>
                                        <td class="badge badge-sm badge-success text-wrap">Dipinjam</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>000001</td>
                                        <td>Edinburg</td>
                                        <td>Umum</td>
                                        <td>16/04/2023</td>
                                        <td>17/04/2023</td>
                                        <td class="badge badge-sm badge-warning text-wrap">Kembali</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
            </div>
        </div>
    </div>
</div>