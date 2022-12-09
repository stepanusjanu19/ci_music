<?php $this->load->view('page/header');
 ?>

<?php $this->load->view('page/sidebar');
 ?>


<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="iq-card iq-realease">
                    <div class="iq-card-header d-flex justify-content-between border-0">
                        <div class="iq-header-title">
                            <h4 class="card-title"><?= $subtitle ?></h4>
                        </div>
                        <div class="row" id="url-position">
                            <a href="<?= base_url('/home') ?>" class="button-style"><i class="las la-list icon-size"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row-lg-12">
                            <?php if($this->session->flashdata('success')){ ?>
                                <div class="alert alert-success" role="alert">
                                    <div class="iq-alert-text"><?= $this->session->flashdata('success') ?></div>
                                </div>
                            <?php $this->session->unset_userdata('success'); } ?>
                            <?php if($this->session->flashdata('error')){ ?>
                                <div class="alert alert-danger" role="alert">
                                    <div class="iq-alert-text"><?= $this->session->flashdata('error') ?></div>
                                </div>
                            <?php $this->session->unset_userdata('error'); } ?>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="form-group img-max">
                                    <img class="img-style" src="<?= base_url() ?>upload_album/albumsong/default.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <form action="<?= base_url('page/songs') ?>" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Upload Foto</label>
                                                <input type="file" class="form-control" id="img" name="img">
                                                <!-- <?= form_error('img', '<small class="text-danger">', '</small>'); ?> -->
                                            </div>
                                            <div class="form-group">
                                                <label for="">Title</label>
                                                <input type="text" class="form-control" id="titlelagu" name="titlelagu" placeholder="Masukkan title lagu">
                                                <?= form_error('titlelagu', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Artis</label>
                                                <input type="text" class="form-control" id="artislagu" name="artislagu" placeholder="Masukkan artis lagu">
                                                <?= form_error('artislagu', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Genre</label>
                                                <input type="text" class="form-control" id="genrelagu" name="genrelagu" placeholder="Masukkan genre lagu">
                                                <?= form_error('genrelagu', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Sub Genre</label>
                                                <input type="text" class="form-control" id="subgemre" name="subgenre" placeholder="Masukkan sub genre lagu">
                                                <?= form_error('subgenre', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Record Label</label>
                                                <input type="text" class="form-control" id="recordlabel" name="recordlabel" placeholder="Masukkan record label lagu">
                                                <?= form_error('recordlabel', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Nama Produksi</label>
                                                <input type="text" class="form-control" id="produced" name="produced" placeholder="Masukkan nama produksi lagu">
                                                <?= form_error('produced', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Tahun Produksi</label>
                                                <select name="tahunproduksi" id="tahunproduksi" class="form-control">
                                                    <option value="">Pilih Tahun Produksi</option>
                                                    <?php $currentYear = date('Y');
                                                        foreach (range(1950, $currentYear) as $value) { ?>
                                                        <option value="<?= $value ?>"><?= $value ?></option>
                                                    <?php } ?>
                                                </select>
                                                <?= form_error('tahunproduksi', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Pertama Tanggal Rilis</label>
                                                <input type="date" name="pertamatanggalrilis" id="pertamatanggalrilis" class="form-control">
                                                <?= form_error('pertamatanggalrilis', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Tanggal Rilis</label>
                                                <input type="date" name="tanggalrilis" id="tanggalrilis" class="form-control">
                                                <?= form_error('tanggalrilis', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Lirik Lagu</label>
                                                <input type="text" name="liriklagu" id="liriklagu" class="form-control" placeholder="Masukkan lirik lagu">
                                                <?= form_error('liriklagu', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Link Lagu</label>
                                                <input type="file" name="linklagu" id="linklagu" class="form-control">
                                                <!-- <?= form_error('linklagu', '<small class="text-danger">', '</small>'); ?> -->
                                            </div>
                                            <div class="form-group">
                                                <label for="">Deskripsi Lagu</label>
                                                <textarea name="deskripsilagu" id="deskripsilagu" cols="30" rows="3" class="form-control"></textarea>
                                                <?= form_error('deskripsilagu', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex">
                                        <button type="submit" class="button-style2">Simpan</button>
                                        <a role="button" href="<?= base_url('/home') ?>" class="button-style3">Batal</a>
                                    </div>
                                </form>     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('page/footer');?>