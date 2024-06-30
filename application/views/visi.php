<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Layanan FT</title>
	<link rel="icon" type="image/png" href="<?= base_url() ?>assets/login/images/icons/favicon.ico"/>
  <link rel="stylesheet" href="<?= base_url() ?>assets/dashboard/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div class="scroll-sidebar" data-simplebar>
        <div class="d-flex mb-4 align-items-center justify-content-between">
            <a href="index.html" class="text-nowrap logo-img ms-0 ms-md-1">
              <img src="<?= base_url() ?>assets/dashboard/images/logos/ftlogin.png" width="200" alt="">
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
              <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
          <ul id="sidebarnav" class="mb-4 pb-2">
            <li class="nav-small-cap"><i class="ti ti-dots nav-small-cap-icon fs-5"></i><span class="hide-menu">Menu</span></li>
              <li class="sidebar-item">
                <a class="sidebar-link sidebar-link primary-hover-bg" href="<?= base_url('dashboard') ?>" aria-expanded="false">
                  <span class="aside-icon p-2 bg-light-primary rounded-3"><i class="ti ti-layout-dashboard fs-7 text-primary"></i></span>
                  <span class="hide-menu ms-2 ps-1">Dashboard</span>
                </a>
              </li>
            <li class="nav-small-cap"><i class="ti ti-dots nav-small-cap-icon fs-5"></i><span class="hide-menu">Layanan</span></li>
              <li class="sidebar-item">
                <a class="sidebar-link sidebar-link warning-hover-bg" href="<?= base_url('eservices') ?>" aria-expanded="false">
                  <span class="aside-icon p-2 bg-light-warning rounded-3"><i class="ti ti-mail fs-7 text-warning"></i></span>
                  <span class="hide-menu ms-2 ps-1">e-Services</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link sidebar-link danger-hover-bg" href="<?= base_url('ecommand') ?>" aria-expanded="false">
                  <span class="aside-icon p-2 bg-light-danger rounded-3"><i class="ti ti-message fs-7 text-danger"></i></span>
                  <span class="hide-menu ms-2 ps-1">e-Command Center</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link sidebar-link success-hover-bg" href="<?= base_url('eresponse') ?>" aria-expanded="false">
                  <span class="aside-icon p-2 bg-light-success rounded-3"><i class="ti ti-device-desktop fs-7 text-success"></i></span>
                  <span class="hide-menu ms-2 ps-1">e-Response</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link sidebar-link primary-hover-bg" href="<?= base_url('ecommerce') ?>" aria-expanded="false">
                  <span class="aside-icon p-2 bg-light-primary rounded-3"><i class="ti ti-id fs-7 text-primary"></i></span>
                  <span class="hide-menu ms-2 ps-1">e-Commerce</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link sidebar-link indigo-hover-bg" href="<?= base_url('eoffice') ?>" aria-expanded="false">
                  <span class="aside-icon p-2 bg-light-indigo rounded-3"><i class="ti ti-briefcase fs-7 text-indigo"></i></span>
                  <span class="hide-menu ms-2 ps-1">e-Office</span>
                </a>
              </li>
            <li class="nav-small-cap"><i class="ti ti-dots nav-small-cap-icon fs-5"></i><span class="hide-menu">Other</span></li>
              <li class="sidebar-item">
                <a class="sidebar-link sidebar-link primary-hover-bg" href="<?= base_url('kuisioner') ?>" aria-expanded="false" >
                  <span class="aside-icon p-2 bg-light-primary rounded-3"> <i class="ti ti-checklist fs-7 text-primary"></i> </span>
                  <span class="hide-menu ms-2 ps-1">Kuisioner</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link sidebar-link indigo-hover-bg" href="<?= base_url('faq') ?>" aria-expanded="false" >
                  <span class="aside-icon p-2 bg-light-indigo rounded-3"> <i class="ti ti-question-mark fs-7 text-indigo"></i> </span>
                  <span class="hide-menu ms-2 ps-1">F A Q</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link sidebar-link success-hover-bg" href="<?= base_url('profile') ?>" aria-expanded="false" >
                  <span class="aside-icon p-2 bg-light-success rounded-3"> <i class="ti ti-user-circle fs-7 text-success"></i> </span>
                  <span class="hide-menu ms-2 ps-1">Profile</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link sidebar-link danger-hover-bg" href="<?= base_url('welcome') ?>" aria-expanded="false" >
                  <span class="aside-icon p-2 bg-light-danger rounded-3"> <i class="ti ti-logout fs-7 text-danger"></i> </span>
                  <span class="hide-menu ms-2 ps-1">Logout</span>
                </a>
              </li>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
              <i class="ti ti-search"></i> &nbsp;&nbsp;&nbsp; <small>Cari Layanan</small>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <a href="javascript:void(0)" class="btn btn-primary rounded-circle"><i class="ti ti-bell-ringing"></i></a>
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="<?= base_url() ?>assets/dashboard/images/profile/user1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="<?= base_url('profile') ?>" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i> <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="<?= base_url('welcome') ?>" class="btn btn-outline-danger mx-3 mt-2 d-block shadow-none">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <div class="text-center mb-5">
                <h3 class="fw-semibold">Kuisioner Mahasiswa</h3>
                <p>Isi kuisioner bagi mahasiswa aktif FT ULM untuk peningkatan kualitas dan evaluasi layanan FT ULM.</p>
                <img src="<?= base_url() ?>assets/dashboard/images/kuisioner/2.png"/>
              </div>
              <form method="post" action="<?= base_url('kuisioner/addvisi') ?>">
                <div class="mb-3">
                  <label class="form-label"><b>Apakah Anda sudah pernah membaca "Visi, Misi, Tujuan dan Strategi" Fakultas Teknik ULM?</b></label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="visimisi1" value="Ya">
                    <label class="form-check-label"> Ya </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="visimisi1" value="Tidak">
                    <label class="form-check-label"> Tidak </label>
                  </div>
                  <?= form_error('visimisi1', '<p class="text-danger small ml-3">') ?>
                </div>
                <div class="mb-3">
                  <label class="form-label"><b>Jika Ya, dari manakah anda mengetahui visi dan misi Fakultas? Boleh dipilih lebih dari satu</b></label>
                    <div class="form-check block">
                      <input class="form-check-input" type="checkbox" name="visimisi2[]" value="Website / Media Sosial">
                      <label class="form-check-label"> Website / Media Sosial </label>
                    </div>
                    <div class="form-check block">
                      <input class="form-check-input" type="checkbox" name="visimisi2[]" value="Brosur">
                      <label class="form-check-label"> Brosur </label>
                    </div>
                    <div class="form-check block">
                      <input class="form-check-input" type="checkbox" name="visimisi2[]" value="Pidato / Sosialisasi Pimpinan">
                      <label class="form-check-label"> Pidato / Sosialisasi Pimpinan </label>
                    </div>
                    <div class="form-check block">
                      <input class="form-check-input" type="checkbox" name="visimisi2[]" value="Banner / Pamflet">
                      <label class="form-check-label"> Banner / Pamflet </label>
                    </div>
                    <div class="form-check block">
                      <input class="form-check-input" type="checkbox" name="visimisi2[]" value="Papan Informasi">
                      <label class="form-check-label"> Papan Informasi </label>
                    </div>
                  <?= form_error('visimisi2', '<p class="text-danger small ml-3">') ?>
                </div>
                <div class="mb-3">
                  <label class="form-label"><b>Apakah Anda sudah pernah mendapatkan sosialisasi/penjelasan tentang "Visi, Misi, Tujuan dan Strategi" Fakultas Teknik ULM?</b></label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="visimisi3" value="Sering">
                    <label class="form-check-label"> Sering </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="visimisi3" value="Beberapa Kali">
                    <label class="form-check-label"> Beberapa Kali </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="visimisi3" value="Satu Kali">
                    <label class="form-check-label"> Satu Kali </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="visimisi3" value="Tidak Sama Sekali">
                    <label class="form-check-label"> Tidak Sama Sekali </label>
                  </div>
                  <?= form_error('visimisi3', '<p class="text-danger small ml-3">') ?>
                </div>
                <div class="mb-3">
                  <label class="form-label"><b>Bagaimanakah tingkat pemahaman Anda terhadap "Visi, Misi, Tujuan dan Strategi" Fakultas Teknik ULM?</b></label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="visimisi4" value="Sangat Paham">
                    <label class="form-check-label"> Sangat Paham </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="visimisi4" value="Paham">
                    <label class="form-check-label"> Paham </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="visimisi4" value="Kurang Paham">
                    <label class="form-check-label"> Kurang Paham </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="visimisi4" value="Tidak Paham">
                    <label class="form-check-label"> Tidak Paham </label>
                  </div>
                  <?= form_error('visimisi4', '<p class="text-danger small ml-3">') ?>
                </div>
                <div class="mb-3">
                  <label class="form-label"><b>Menurut Anda apakah semua aspek kegiatan akademik sudah terakomodasi dalam visi dan misi Fakultas Teknik ULM?</b></label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="visimisi5" value="Sudah">
                    <label class="form-check-label"> Sudah </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="visimisi5" value="Sebagian">
                    <label class="form-check-label"> Sebagian </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="visimisi5" value="Hanya Sedikit">
                    <label class="form-check-label"> Hanya Sedikit </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="visimisi5" value="Tidak Ada">
                    <label class="form-check-label"> Tidak Ada </label>
                  </div>
                  <?= form_error('visimisi5', '<p class="text-danger small ml-3">') ?>
                </div>
                <div class="mb-3">
                  <label class="form-label"><b>Berdasarkan pertanyaan di atas, sudah tercermin dalam segi apakah visi dan misi Fakultas Teknik ULM? Boleh memilih lebih dari satu jawaban</b></label>
                    <div class="form-check block">
                      <input class="form-check-input" type="checkbox" name="visimisi6[]" value="Kurikulum & Kompetensi Lulusan">
                      <label class="form-check-label"> Kurikulum & Kompetensi Lulusan </label>
                    </div>
                    <div class="form-check block">
                      <input class="form-check-input" type="checkbox" name="visimisi6[]" value="Proses Pembelajaran">
                      <label class="form-check-label"> Proses Pembelajaran </label>
                    </div>
                    <div class="form-check block">
                      <input class="form-check-input" type="checkbox" name="visimisi6[]" value="Penelitian / Pengabdian">
                      <label class="form-check-label"> Penelitian / Pengabdian </label>
                    </div>
                    <div class="form-check block">
                      <input class="form-check-input" type="checkbox" name="visimisi6[]" value="Kompetensi Dosen / Karyawan">
                      <label class="form-check-label"> Kompetensi Dosen / Karyawan </label>
                    </div>
                    <div class="form-check block">
                      <input class="form-check-input" type="checkbox" name="visimisi6[]" value="Tidak Ada">
                      <label class="form-check-label"> Tidak Ada </label>
                    </div>
                  <?= form_error('visimisi6', '<p class="text-danger small ml-3">') ?>
                </div>
                <div class="text-center mt-5">
                  <a href="<?= base_url('kuisioner') ?>" class="btn btn-secondary">Sebelumnya</a>
                  <button type="submit" class="btn btn-primary">Lanjut</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Submitted as a Class Assignment.</p>
        </div>
      </div>
    </div>
  </div>
  <script src="<?= base_url() ?>assets/dashboard/libs/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/dashboard/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/dashboard/js/sidebarmenu.js"></script>
  <script src="<?= base_url() ?>assets/dashboard/js/app.min.js"></script>
  <script src="<?= base_url() ?>assets/dashboard/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="<?= base_url() ?>assets/dashboard/libs/simplebar/dist/simplebar.js"></script>
  <script src="<?= base_url() ?>assets/dashboard/js/dashboard.js"></script>
</body>

</html>