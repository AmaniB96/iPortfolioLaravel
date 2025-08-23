<section class="admin-section">
    <h2>Add New Testimonial</h2>
    <form action="{{ route('backTestimonial.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nom">Name</label>
            <input type="text" name="nom" id="nom">
        </div>
        <div class="form-group">
            <label for="text">Quote</label>
            <textarea name="text" id="text" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image">
        </div>
        <button type="submit" class="btn-back-submit">Add Testimonial</button>
    </form>
</section>