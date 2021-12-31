 <!-- About-->
 <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">Silahkan Menonton :)</h2>
                    </div>
                </div>
                <hr>
                <h2 class="text-white mb-4">Video dari Youtube</h2>
                <iframe width="1000" height="480"
                src="https://www.youtube.com/embed/ddmEhvD5DTs">
                </iframe>
                <hr>
                <h2 class="text-white mb-4">Video dari data File</h2>
                <video width="1000" height="480" controls>
                <source src="assets/vid/movie.mp4" type="video/mp4">
                <source src="assets/vid/movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
                </video>
                <hr>
                <a class="btn btn-primary" href="<?= base_url('comment'); ?>">Tinggalkan Komen</a>
            </div>
        </section>