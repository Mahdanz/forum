                    <!-- MODAL POSTINGAN -->
                    <div class="modal fade" id="modalpostingan<?php echo $d['id_postingan'] ?>" style="padding-bottom: 300px;
    padding-top: 50px;" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <form role="form" action="edit_masuk.php" method="get">
                                        <?php
                                        $id = $d['id_postingan'];
                                        // $query_edit = mysqli_query($koneksi, "SELECT * FROM tb_postingan WHERE id_postingan='$id'");
                                        $query_edit = mysqli_query($koneksi, "SELECT * FROM tb_postingan INNER JOIN tb_topik ON tb_postingan.id_topik = tb_topik.id_topik INNER JOIN tb_pengguna ON tb_postingan.id_pengguna = tb_pengguna.id_pengguna WHERE id_postingan='$id'"); 
                                   
                                        while ($row = mysqli_fetch_array($query_edit)) {

                                        ?>

                                        <div class="card card-widget">
                                            <div class="card-header">
                                                <div class="user-block">
                                                    <img class="img-circle" src="../../../dist/img/user1-128x128.jpg"
                                                        alt="User Image" />
                                                    <span class="username"><a
                                                            href="#"><?php echo $row['nm_pengguna'] ?>.
                                                        </a>
                                                    </span>
                                                    <span class="description"><?php echo $row['nm_topik'] ?> -
                                                        <?php echo $row['kredensial'] ?></span>
                                                </div>
                                                <!-- /.user-block -->
                                                <div class="card-tools">
                                                    <p>#<?php echo $row['tipe'] ?></p>
                                                </div>
                                                <!-- /.card-tools -->
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">

                                                <p class="font-weight-bold"><?php echo $row['judul'] ?></p>
                                                <p><?php echo $row['deskripsilengkap']?></p>
                                                <img class="img-fluid pad" src="../../../../dist/img/photo2.png"
                                                    alt="Photo" />
                                                <br>

                                            </div>



                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Tutup</button>
                                            </div>
                                            <?php } ?>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- MODAL POSTINGAN -->








                    <!-- MODAL KOMENTAR -->
                    <div class="modal fade" id="modalkomentar<?php echo $d['id_postingan'] ?>" style="padding-bottom: 300px;
    padding-top: 50px;" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <form role="form" action="edit_masuk.php" method="get">
                                        <?php
                                        $id = $d['id_postingan'];
                                        // $query_edit = mysqli_query($koneksi, "SELECT * FROM tb_postingan WHERE id_postingan='$id'");
                                        $query_edit = mysqli_query($koneksi, "SELECT * FROM tb_postingan INNER JOIN tb_topik ON tb_postingan.id_topik = tb_topik.id_topik INNER JOIN tb_pengguna ON tb_postingan.id_pengguna = tb_pengguna.id_pengguna WHERE id_postingan='$id'"); 
                                   
                                        while ($row = mysqli_fetch_array($query_edit)) {

                                        ?>

                                        <div class="card card-widget">
                                            <div class="card-header">
                                                <div class="user-block">
                                                    <img class="img-circle" src="../../../dist/img/user1-128x128.jpg"
                                                        alt="User Image" />
                                                    <span class="username"><a
                                                            href="#"><?php echo $row['nm_pengguna'] ?>.
                                                        </a>
                                                    </span>
                                                    <span class="description"><?php echo $row['nm_topik'] ?> -
                                                        <?php echo $row['kredensial'] ?></span>
                                                </div>
                                                <!-- /.user-block -->
                                                <div class="card-tools">
                                                    <p>#<?php echo $row['tipe'] ?></p>
                                                </div>
                                                <!-- /.card-tools -->
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">

                                                <p class="font-weight-bold"><?php echo $row['judul'] ?></p>
                                                <p><?php echo $row['deskripsilengkap']?></p>
                                                <img class="img-fluid pad" src="../../../../dist/img/photo2.png"
                                                    alt="Photo" />
                                                <br>

                                            </div>



                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Tutup</button>
                                            </div>
                                            <?php } ?>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- MODAL KOMENTAR -->










                    <!-- MODAL PEGGUNA -->
                    <div class="modal fade" id="modalpengguna<?php echo $d['id_postingan'] ?>" style="padding-bottom: 300px;
    padding-top: 50px;" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <form role="form" action="edit_masuk.php" method="get">
                                        <?php
                                        $id = $d['id_postingan'];
                                        // $query_edit = mysqli_query($koneksi, "SELECT * FROM tb_postingan WHERE id_postingan='$id'");
                                        $query_edit = mysqli_query($koneksi, "SELECT * FROM tb_postingan INNER JOIN tb_topik ON tb_postingan.id_topik = tb_topik.id_topik INNER JOIN tb_pengguna ON tb_postingan.id_pengguna = tb_pengguna.id_pengguna WHERE id_postingan='$id'"); 
                                   
                                        while ($row = mysqli_fetch_array($query_edit)) {

                                        ?>

                                        <div class="card card-widget">
                                            <div class="card-header">
                                                <div class="user-block">
                                                    <img class="img-circle" src="../../../dist/img/user1-128x128.jpg"
                                                        alt="User Image" />
                                                    <span class="username"><a
                                                            href="#"><?php echo $row['nm_pengguna'] ?>.
                                                        </a>
                                                    </span>
                                                    <span class="description"><?php echo $row['nm_topik'] ?> -
                                                        <?php echo $row['kredensial'] ?></span>
                                                </div>
                                                <!-- /.user-block -->
                                                <div class="card-tools">
                                                    <p>#<?php echo $row['tipe'] ?></p>
                                                </div>
                                                <!-- /.card-tools -->
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">

                                                <p class="font-weight-bold"><?php echo $row['judul'] ?></p>
                                                <p><?php echo $row['deskripsilengkap']?></p>
                                                <img class="img-fluid pad" src="../../../../dist/img/photo2.png"
                                                    alt="Photo" />
                                                <br>

                                            </div>



                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Tutup</button>
                                            </div>
                                            <?php } ?>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- MODAL P[ENGGUNA] -->