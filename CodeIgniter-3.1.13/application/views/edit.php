<div class="content-wrapper">
    <section class="content">

        <?php foreach($mahasiswa as $mhs) : ?>

            <form action="<?php echo base_url().'mahasiswa/update'; ?>" method="post">
            <div class="form-group">
                <label>Nama Mahasiswa</label>
                <input type="hidden" name="id" class="form-control" value="<?php echo $mhs->id ?>">
                <input type="text" name="nama" class="form-control" value="<?php echo $mhs->nama ?>">
            </div>

            <div class="form-group">
                <label>NIM</label>
                <input type="text" name="nim" class="form-control" value="<?php echo $mhs->nim ?>">
            </div>

            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $mhs->tgl_lahir ?>">
            </div>

            <div class="form-group">
                <label>Jurusan</label>
                <input type="text" name="jurusan" class="form-control" value="<?php echo $mhs->jurusan ?>">
            </div>

            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        <?php endforeach?>    
    </section>
</div>