<?= $this->extend('layout') ?> <?= $this->section('content') ?>
<div class="pagetitle">
  <h1>Profile Pengguna</h1>
</div>

<section class="section profile">
  <div class="row">
    <div class="col-xl-8">
      <div class="card">
        <div class="card-body pt-3">
          <div class="tab-content pt-2">
            <div class="profile-overview">
              <h5 class="card-title">Detail Profil</h5>

              <div class="row mb-3">
                <div class="col-lg-3 col-md-4 label fw-bold text-primary">Username</div>
                <div class="col-lg-9 col-md-8"><?= session()->get('username') ?> <span class="badge bg-danger ms-2"><?= session()->get('role') ?></span></div>
              </div>

              <div class="row mb-3">
                <div class="col-lg-3 col-md-4 label fw-bold text-primary">Email</div>
                <div class="col-lg-9 col-md-8 text-info"><u><?= session()->get('email') ?></u></div>
              </div>

              <div class="row mb-3">
                <div class="col-lg-3 col-md-4 label fw-bold text-primary">Waktu Login</div>
                <div class="col-lg-9 col-md-8"><?= session()->get('login_time') ?></div>
              </div>

              <div class="row mb-3">
                <div class="col-lg-3 col-md-4 label fw-bold text-primary">Status</div>
                <div class="col-lg-9 col-md-8">
                  <span class="badge bg-success">Sudah Login</span>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection() ?>