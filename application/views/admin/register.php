<!-- Projects-->
<section class="projects-section bg-dark" id="projects">
<form class="user" method="post" action="<?= base_url('login/registrasi'); ?>">
 <div class="form-group">
 <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
 <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
 </div>
 <br>
 <div class="form-group">
 <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat Email" value="<?= set_value('email'); ?>">
 <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
 </div>
 <br>
 <div class="form-group row">
 <div class="col-sm-6 mb-3 mb-sm-0">
 <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
 <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
 </div>
 <div class="col-sm-6">
 <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
 <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
 </div>
 </div>
 <br>
 <div class="wrapper">
 <button type="submit" class="btn btn-primary btn-user btn-block button">
 Register Menjadi Admin
 </button>
 </div>
 </form>
</section>