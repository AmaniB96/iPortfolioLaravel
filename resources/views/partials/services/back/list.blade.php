<section class="admin-section">
    <h2 style="margin-top: 40px;">Existing Services</h2>
    <table class="admin-table">
        <thead>
            <tr>
                <th>Service</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $item)
                <tr>
                    <td>{{ $item->service }}</td>
                    <td>
                        <a href="{{ route('backService.edit', $item->id) }}" class="btn-edit">Edit</a>
                        <form action="{{ route('backService.destroy', $item->id) }}" method="POST" style="display:inline;">
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