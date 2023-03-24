<!-- DataTales Example -->
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
                    <th>Nama Poli</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Keterangan</th>
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
                    <th>Nama Poli</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>000001</td>
                    <td>351000000000000</td>
                    <td>Edinburg</td>
                    <td>25/04/2000</td>
                    <td>Laki-Laki</td>
                    <td>Gigi</td>
                    <td>25/04/2023</td>
                    <td>26/04/2023</td>
                    <td class="badge badge-sm badge-danger text-wrap">Terlambat</td>
                    <td><a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newKelengkapanModal">Kelengkapan</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>000002</td>
                    <td>351000000000000</td>
                    <td>Wiwin</td>
                    <td>25/04/2000</td>
                    <td>Laki-Laki</td>
                    <td>Gigi</td>
                    <td>25/04/2023</td>
                    <td>26/04/2023</td>
                    <td class="badge badge-sm badge-success text-wrap">Tepat Waktu</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="newKelengkapanModal" tabindex="-1" role="dialog" aria-labelledby="newKelengkapanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newKelengkapanModalLabel">Tambah Peminjaman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="<?php base_url('admin/data_kembali/kelengkapan'); ?>" method="post">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">No Rekam Medis</label>
                        <div class="col-sm-10">
                            <input type="text" name="no_rm" id="no_rm" class="form-control" placeholder="No Rekam Medis">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Pasien</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_pasien" id="nama_pasien" class="form-control" placeholder="Nama Pasien">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Pasien</label>
                        <div class="col-sm-10">
                            <select name="nama_poli" class="form-control">
                                <option value="">- Pilih -</option>
                                <option value="">- Ada -</option>
                                <option value="">- Tidak Ada -</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <select name="nama_poli" class="form-control">
                                <option value="">- Pilih -</option>
                                <option value="">- Ada -</option>
                                <option value="">- Tidak Ada -</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <select name="nama_poli" class="form-control">
                                <option value="">- Pilih -</option>
                                <option value="">- Ada -</option>
                                <option value="">- Tidak Ada -</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanggal Pemeriksaan</label>
                        <div class="col-sm-10">
                            <select name="nama_poli" class="form-control">
                                <option value="">- Pilih -</option>
                                <option value="">- Ada -</option>
                                <option value="">- Tidak Ada -</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Anamnesis (SOAP)</label>
                        <div class="col-sm-10">
                            <select name="nama_poli" class="form-control">
                                <option value="">- Pilih -</option>
                                <option value="">- Ada -</option>
                                <option value="">- Tidak Ada -</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Diagnosis</label>
                        <div class="col-sm-10">
                            <select name="nama_poli" class="form-control">
                                <option value="">- Pilih -</option>
                                <option value="">- Ada -</option>
                                <option value="">- Tidak Ada -</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Persetujuan Tindakan</label>
                        <div class="col-sm-10">
                            <select name="nama_poli" class="form-control">
                                <option value="">- Pilih -</option>
                                <option value="">- Ada -</option>
                                <option value="">- Tidak Ada -</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanda Tangan</label>
                        <div class="col-sm-10">
                            <select name="nama_poli" class="form-control">
                                <option value="">- Pilih -</option>
                                <option value="">- Ada -</option>
                                <option value="">- Tidak Ada -</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>