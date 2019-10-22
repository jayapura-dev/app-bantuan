<div class="breadcome-area mg-b-30 small-dn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                    <div class="row">
                        <div class="col-lg-6">

                        </div>
                        <div class="col-lg-6">
                            <ul class="breadcome-menu">
                                <li><a href="#">Tugas Belajar</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Usulan PTB</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
              <?php echo $this->session->flashdata('simpan');?>
              <?php echo $this->session->flashdata('update');?>
              <?php echo $this->session->flashdata('hapus');?>
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h5>Daftar<span class="table-project-n"></span> Pejabat Yang Harus Melakukan Perpajangan Tugas Belajar Kurang Dari 30 Hari</h5>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">
                                <select class="form-control">
                                    <option value="">Export Basic</option>
                                    <option value="all">Export All</option>
                                    <option value="selected">Export Selected</option>
                                </select>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="no">No</th>
                                        <th data-field="nama">Nama Pegawai</th>
                                        <th data-field="akhir">Tgl Akhir</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $no = 1;
                                  foreach($usulan_ptb as $item){
                                  ?>
                                  <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $item->nama ?> <br/> <?php echo $item->nip ?></td>
                                    <td><?php echo $item->tgl_akhir ?></td>
                                    <td>
                                      <a href="#" title="Tambah PIB" type="button" class="btn btn-custon-three btn-primary btn-xs"><i class="fa fa-plus-circle"></i></a>
                                    </td>
                                  </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>