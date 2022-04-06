<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Update todo <?= $data['title'] ?></h5>

            <form action="/todo/<?= $data['id'] ?>" method="post">
                <input type="hidden" name="_method" value="put" />

                <div class="form-group">
                    <label for="example-product-title">title</label>
                    <input type="text" class="form-control" id="example-product-name" aria-describedby="emailHelp" 
                        placeholder="Enter product title" required name="title" value="<?= $data['title'] ?>">
                </div>

                <div class="form-group">
                    <label for="example-product-description">description</label>
                    <input type="text" class="form-control" id="example-product-description" aria-describedby="emailHelp" 
                        placeholder="Enter product description" required name="description" value="<?= $data['description'] ?>">
                </div>

                <div class="form-group">
                    <label for="example-product-fineshed_at">finished</label>
                    <input type="datetime" class="form-control" id="example-product-finished_at" aria-describedby="emailHelp" 
                        placeholder="Enter product finished_at" required name="finished_at" value="<?= $data['finished_at'] ?>">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>