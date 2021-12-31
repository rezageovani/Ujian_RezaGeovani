 <!-- Contact-->
 <section class="contact-section bg-black">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-100 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Log In</h4>
                                <hr class="my-4 mx-auto" />

                                <?= $this->session->flashdata('pesan'); ?>
                                <form class="user" method="post" action="<?= base_url('login'); ?>">
                                <div class="form-group">
                                <input type="text" class="form-control form-control-user" value="<?= set_value('email');  ?>"  id="email"  placeholder="Masukkan Alamat Email" name="email">
                                <?=  form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <br>
                                <div class="form-group">
                                <input type="password" class="form-control  form-control-user"  id="password" placeholder="Password" name="password">
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Masuk</button>
                                </form>
                                <div class="text-center">
                                <a class="small" href="<?=base_url('login/registrasi');  ?>">Register Menjadi Admin</a>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="https://twitter.com/login"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="https://github.com/"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </section>