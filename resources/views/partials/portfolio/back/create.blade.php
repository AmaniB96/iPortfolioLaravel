
<section>
<h1>Portfolio edit</h1>
<form action="{{ route('backPortfolio.store') }}" method="POST" enctype="multipart/form-data" class="portfolio-back-form">
    @csrf
    <div class="form-group">
        <label for="filter">Catégorie</label>
        <input type="text" name="filter" id="filter" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="img">Image</label>
        <input type="file" name="img" id="img" class="form-control" required>
    </div>
    <button type="submit" class="btn-back-submit">Ajouter au portfolio</button>
</form>

</section>