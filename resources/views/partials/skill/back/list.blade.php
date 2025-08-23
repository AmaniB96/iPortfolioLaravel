<section class="admin-section">
    <h2 style="margin-top: 40px;">Existing Skills</h2>
    <table class="admin-table">
        <thead>
            <tr>
                <th>Skill</th>
                <th>Proficiency</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($skills as $item)
                <tr>
                    <td>{{ $item->skill }}</td>
                    <td>{{ $item->pourcentage }}%</td>
                    <td>
                        <a href="{{ route('backSkill.edit', $item->id) }}" class="btn-edit">Edit</a>
                        <form action="{{ route('backSkill.destroy', $item->id) }}" method="POST" style="display:inline;">
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