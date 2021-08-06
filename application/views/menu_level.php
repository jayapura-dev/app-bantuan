<?php if ($this->session->userdata('level')=='1') {?>

<div class="left-custom-menu-adp-wrap">
    <ul class="nav navbar-nav left-sidebar-menu-pro">
        <li class="nav-item">
            <a href="<?php echo base_url()?>Dashboard" role="button" aria-expanded="false" class="nav-link"><i class="fa big-icon fa-home"></i> <span class="mini-dn">D A S H B O A R D</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn"></i></span></a>
        </li>
        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-database"></i> <span class="mini-dn">Data Master</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
              <a href="<?php echo base_url()?>Pd" class="dropdown-item">Perangkat Daerah</a>
              <a href="<?php echo base_url()?>Distrik" class="dropdown-item">Distrik</a>
              <a href="<?php echo base_url()?>Kategori" class="dropdown-item">Ketegori</a>
            </div>
        </li>

        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-users"></i> <span class="mini-dn">Bantuan</span> <span class="indicator-right-menu mini-dn"><i class="fa user-mn fa-angle-left"></i></span></a>
            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
              <a href="#" class="dropdown-item">Perorangan</a>
              <a href="<?php echo base_url()?>Bantuan/kelompok" class="dropdown-item">Kelompok</a>
            </div>
        </li>

        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-cogs"></i> <span class="mini-dn">Settings</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
              <a href="#">Level</a>
              <a href="#" class="dropdown-item">Pengguna</a>
            </div>
        </li>

    </ul>
</div>

<?php }
elseif ($this->session->userdata('level')=='2'){?>
  <div class="left-custom-menu-adp-wrap">
      <ul class="nav navbar-nav left-sidebar-menu-pro">
          <li class="nav-item">
              <a href="<?php echo base_url()?>home" role="button" aria-expanded="false" class="nav-link"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Beranda</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn"></i></span></a>
          </li>
          <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-database"></i> <span class="mini-dn">Data Master</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
              <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                <a href="<?php echo base_url()?>data_master/jabatan" class="dropdown-item">Jabatan</a>
                <a href="<?php echo base_url()?>data_master/pangkat" class="dropdown-item">Pangkat</a>
                <a href="<?php echo base_url()?>pegawai" class="dropdown-item">Pegawai</a>
              </div>
          </li>
          <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-users"></i> <span class="mini-dn">Pangkat</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
              <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                  <a href="<?php echo base_url()?>kpb/usulan_kp" class="dropdown-item">Usulan KP</a>
                  <a href="<?php echo base_url()?>kpb" class="dropdown-item">KP</a>
                  <a href="<?php echo base_url()?>kpb/cari_kpb" class="dropdown-item">Laporan</a>
              </div>
          </li>

          <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-money"></i> <span class="mini-dn">Gaji Pokok</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
              <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                  <a href="<?php echo base_url()?>kgb/usulan_kgb" class="dropdown-item">Usulan KGB</a>
                  <a href="<?php echo base_url()?>kgb" class="dropdown-item">KGB</a>
                  <a href="#" class="dropdown-item">Laporan</a>
              </div>
          </li>
          <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-plus-circle"></i> <span class="mini-dn">Jabatan</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
              <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                  <a href="<?php echo base_url()?>jabatan" class="dropdown-item">Jabatan</a>
                  <a href="#" class="dropdown-item">Laporan</a>
              </div>
          </li>
          <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-calendar"></i> <span class="mini-dn">Pensiun</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
              <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                  <a href="<?php echo base_url()?>pensiun/usulan_pensiun" class="dropdown-item">Usulan Pensiun</a>
                  <a href="<?php echo base_url()?>pensiun" class="dropdown-item">Data Pensiun</a>
              </div>
          </li>
          <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-edit"></i> <span class="mini-dn">Ijin Belajar</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
              <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                  <a href="<?php echo base_url()?>ib/usulan_pib">Usulan PIB</a>
                  <a href="<?php echo base_url()?>ib/ijin_belajar" class="dropdown-item">Ijin Belajar</a>
                  <a href="<?php echo base_url()?>ib">PIB</a>

              </div>
          </li>
          <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-briefcase"></i> <span class="mini-dn">Tugas Belajar</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
              <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                <a href="<?php echo base_url()?>tb/usulan_ptb">Usulan PTB</a>
                <a href="<?php echo base_url()?>tb/tugas_belajar" class="dropdown-item">Tugas Belajar</a>
                <a href="<?php echo base_url()?>tb">PTB</a>
              </div>
          </li>

      </ul>
  </div>
<?php } ?>
