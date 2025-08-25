<section class="admin-section">
    <h2>Contact Information</h2>
    @if($contact)
        <p><strong>Location:</strong> {{ $contact->location }}</p>
        <p><strong>Email:</strong> {{ $contact->email }}</p>
        <p><strong>Call:</strong> {{ $contact->call }}</p>
        <a href="{{ route('backContact.edit', $contact->id) }}" class="btn-edit">Edit Contact Info</a>
    @else
        <p>No contact information set.</p>
    @endif
</section>