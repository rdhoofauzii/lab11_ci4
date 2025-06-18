<?= $this->include('template/admin_header'); ?>

<h2><?= esc($title); ?></h2>

<!-- Tampilkan error validasi jika ada -->
<?php if (!empty($errors)) : ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach ($errors as $error) : ?>
                <li><?= esc($error); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<form action="" method="post">
    <?= csrf_field(); ?> <!-- Tambahkan CSRF Protection -->
    
    <p>
        <input type="text" name="judul" value="<?= old('judul'); ?>" placeholder="Judul Artikel">
    </p>
    <p>
        <textarea name="isi" cols="50" rows="10" placeholder="Isi Artikel"><?= old('isi'); ?></textarea>
    </p>
    <p>
        <input type="submit" value="Kirim" class="btn btn-large">
    </p>
</form>

<?= $this->include('template/admin_footer'); ?>
