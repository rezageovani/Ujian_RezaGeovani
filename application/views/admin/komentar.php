 <!-- Signup-->
 <section class="signup-section" id="signup">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Silahkan Meninggalkan Komentar :)</h2>
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        
                        <form action="" method="post">
                        <input type="text" name="komentar" placeholder="Silahkan Komentar Disini ..." value="<?= set_value('komen'); ?>" size="50">
                        <hr>
                        <button type="submit" value="Simpan" name="proses" class="btn btn-primary btn-user btn-block">
                        Komen !!!
                        </button>
                        </form>
                        <?php
                        include "koneksi.php";
                        if(isset($_POST['proses'])){
                            mysqli_query($koneksi,"insert into pendapat set
                            komentar = '$_POST[komentar]'
                            ");
                            echo '<span style="color:#ffffff;">Komentar Telah Dikirim :)</span>';
                        }
                        ?>

                    </div>
                </div>
            </div>
        </section>