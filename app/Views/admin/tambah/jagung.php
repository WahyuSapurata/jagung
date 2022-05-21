<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Jagung</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" action="<?= base_url('admin/tambah_jagung') ?>">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select name="id_kategori" id="id_kategori" class="form-control">
                            <option value="">--pilih kategori--</option>
                            <?php foreach ($kategori as $kgt) : ?>
                                <option value="<?= $kgt['id_kategori']; ?>"><?= $kgt['jenis_kategori']; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tersedia</label>
                        <input type="text" name="tersedia" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Produk</label>
                        <textarea type="text" name="deskripsi" id="ckeditor" class="ckeditor" required style="width: auto;"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Foto Jagung</label>
                        <input type="file" id="file_upload" class="custom" name="file_upload" onchange="gambar(this.value)">
                    </div>
                    <img width="100" alt="" src="#" id="foto" class="mb-3">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<style>
    .modal-dialog {
        min-width: min-content;
    }
</style>