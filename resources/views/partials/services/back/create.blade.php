<section class="admin-section">
    <h2>Add New Service</h2>
    <form action="{{ route('backService.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="service">Service Name</label>
            <input type="text" name="service" id="service">
        </div>
        <button type="submit" class="btn-back-submit">Add Service</button>
    </form>
</section>