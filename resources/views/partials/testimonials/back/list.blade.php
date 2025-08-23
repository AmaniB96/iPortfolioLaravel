<section class="admin-section">
    <h2 style="margin-top: 40px;">Existing Testimonials</h2>
    <table class="admin-table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Quote</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($testimonials as $item)
                <tr>
                    <td><img src="{{ asset($item->image) }}" alt="Testimonial" width="50"></td>
                    <td>{{ $item->nom }}</td>
                    <td>{{ Str::limit($item->text, 50) }}</td>
                    <td>
                        <a href="{{ route('backTestimonial.edit', $item->id) }}" class="btn-edit">Edit</a>
                        <form action="{{ route('backTestimonial.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>