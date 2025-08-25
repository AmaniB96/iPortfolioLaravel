<section class="admin-section">
    <h2>Messages</h2>
    @if(session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif
    <table class="admin-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($messages as $msg)
                <tr>
                    <td>{{ $msg->nom }}</td>
                    <td>{{ $msg->email }}</td>
                    <td>{{ $msg->sujet }}</td>
                    <td>{{ $msg->message }}</td>
                    <td>
                        <form action="{{ route('backMessage.destroy', $msg->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete" onclick="return confirm('Delete this message?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5">No messages found.</td></tr>
            @endforelse
        </tbody>
    </table>
</section>