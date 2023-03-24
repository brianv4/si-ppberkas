<!-- DataTales Example -->
<div class="card-body">
    <div class="col-md-12">
        <form action="">
            <div class="d-sm-flex align-items-center">
                <div class="form-group mr-3">
                    <label>Pilih Tanggal:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="far fa-calendar-alt"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="daterange" value="" />
                    </div>
                </div>
                <button class="btn btn-info mt-3">Cari</button>
                <a href="" class="btn btn-info mt-3 ml-3">Reset</a>
            </div>
        </form>
        <div class="col-md-12">
            <div class="mb-3">
                <a href="" class="btn btn-primary">Cetak PDF</a>
                <a href="" class="btn btn-info">Cetak Excel</a>
            </div>
        </div>
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
</div>