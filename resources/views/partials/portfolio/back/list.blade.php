<section class="admin-section">
    <h2 style="margin-top: 40px;">Existing Portfolio Items</h2>
    <table class="admin-table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($portfolio as $item)
                <tr>
                    <td><img src="{{ asset($item->img) }}" alt="Portfolio Image" width="80"></td>
                    <td>{{ $item->filter }}</td>
                    <td>
                        <a href="{{ route('backPortfolio.edit', $item->id) }}" class="btn-edit">Edit</a>
                        <form action="{{ route('backPortfolio.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No portfolio items found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</section>