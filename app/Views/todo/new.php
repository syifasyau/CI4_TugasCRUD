<?= $this->extend('base') ?>

<?= $this->section('content') ?>
    <form action="/todo/create" method="post">
        <label for="title">Title</label>
        <br />
        <input type="varchar" id="title" placeholder="Nama Kegiatanmu" name="title" />
        
        <br />
        <br />
        <label for="description">Description</label>
        <br />
        <input type="text" id="description" placeholder="Deskripsikan kegiatanmu" name="description" />

        <br /> 
        <br />
        <label for="finished_at">Finished</label>
        <br />
        <input type="datetime" id="finished_at" placeholder="Deadline" name="finished_at" />

        <br />
        <br />
        <button type="submit">Submit</button>
    </form>
<?= $this->endSection() ?>
