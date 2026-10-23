@extends('admin.layout')
@section('title', 'Review enquiry')
@section('content')
    <div class="page-heading">
        <div>
            <p class="eyebrow">ENQUIRY #{{ $enquiry->id }}</p>
            <h1>{{ $enquiry->full_name }}</h1>
            <p>Received {{ $enquiry->created_at->format('j F Y, H:i') }}</p>
        </div><a class="btn btn-secondary" href="{{ route('admin.enquiries.index') }}">Back to inbox</a>
    </div>
    <div class="editor-layout">
        <div>
            <section class="panel">
                <h2>Contact details</h2>
                <dl class="detail-grid">
                    <div>
                        <dt>Work email</dt>
                        <dd><a href="mailto:{{ $enquiry->email }}">{{ $enquiry->email }}</a></dd>
                    </div>
                    <div>
                        <dt>Company</dt>
                        <dd>{{ $enquiry->company }}</dd>
                    </div>
                    <div>
                        <dt>Role</dt>
                        <dd>{{ $enquiry->role }}</dd>
                    </div>
                    <div>
                        <dt>Area of interest</dt>
                        <dd>{{ $enquiry->interest }}</dd>
                    </div>
                </dl>
                <hr>
                <h2>Message</h2>
                <p class="preserve-lines">{{ $enquiry->message }}</p>
            </section>
            <section class="panel">
                <h2>Internal notes</h2>
                <p class="field-help">These notes are visible only to authorised enquiry staff.</p>
                @forelse($enquiry->notes as $note)
                    <article class="internal-note">
                        <strong>{{ $note->user?->name ?: 'Removed user' }}</strong><small>{{ $note->created_at->format('j M Y, H:i') }}</small>
                        <p class="preserve-lines">{{ $note->body }}</p>
                </article>@empty<p class="empty-state">No internal notes yet.</p>
                @endforelse
            </section>
        </div>
        <aside>
            <section class="panel">
                <h2>Update enquiry</h2>
                <form method="post" action="{{ route('admin.enquiries.update', $enquiry) }}">@csrf @method('put')<div
                        class="field"><label for="status">Status</label><select id="status" name="status">
                            @foreach (['new' => 'New', 'in_progress' => 'In Progress', 'closed' => 'Closed'] as $key => $label)
                                <option value="{{ $key }}" @selected(old('status', $enquiry->status) === $key)>{{ $label }}
                                </option>
                            @endforeach
                        </select></div>
                    <div class="field"><label for="note">Add an internal note</label>
                        <textarea id="note" name="note" rows="5" maxlength="4000">{{ old('note') }}</textarea>
                    </div><button class="btn btn-primary full-width">Save update</button>
                </form>
            </section>
            <section class="panel">
                <h2>Privacy record</h2>
                <dl>
                    <dt>Notice acknowledged</dt>
                    <dd>{{ $enquiry->privacy_version }}</dd>
                    <dt>Acknowledged at</dt>
                    <dd>{{ $enquiry->consented_at->format('j F Y, H:i') }}</dd>
                </dl>
                <p class="field-help">This acknowledgement is for handling the enquiry. It is not marketing consent.</p>
            </section>
            <section class="panel">
                <h2>Delete enquiry</h2>
                <p class="field-help">Permanently removes the contact record and its internal notes.</p>
                <form method="post" action="{{ route('admin.enquiries.destroy', $enquiry) }}"
                    data-confirm="Delete this enquiry and all internal notes permanently?">@csrf @method('delete')<button
                        class="btn btn-danger">Delete enquiry</button></form>
            </section>
        </aside>
    </div>
@endsection
