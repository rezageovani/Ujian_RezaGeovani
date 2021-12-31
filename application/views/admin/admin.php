<!-- Projects-->
        <section class="projects-section bg-secondary" id="projects">
                <!-- Project One Row-->
                <div style="background-image: url('assets/assets/img/itemputih.jpg'); background-repeat:no-repeat; background-size: cover;">
                <br>
                <h1 class="card-title"><?= $user['nama']; ?></h1>
                <hr>
                <table class="table table-hover">
                <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">ID</th>
                <th scope="col">Komentar</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $a = 1;
                foreach ($pendapat as $b) { ?>
                <tr>
                <th scope="row"><?= $a++; ?></th>
                <td><?= $b['id']; ?></td>
                <td><?= $b['komentar']; ?></td>
                <td>
                <a href="<?=base_url('admin/hapusKomen/').$b['id'];?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul.' '.$b['komentar'];?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
                </td>
                </tr>
                <?php } ?>
                </table>
            
                <div>Pilih "Logout" di bawah jika kamu sudah selesai.</div>
                <div class="modal-footer">
                <a class="btn btn-primary" href="<?=base_url('login/logout'); ?>">Logout</a>
                </div>
        </section>