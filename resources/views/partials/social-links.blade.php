<div class="public-socials" aria-label="Social links">
    @foreach (['linkedin' => 'fa-linkedin-in', 'facebook' => 'fa-facebook-f', 'instagram' => 'fa-instagram', 'youtube' => 'fa-youtube', 'x' => 'fa-x-twitter'] as $network => $icon)
        @if ($site[$network])
            <a href="{{ $site[$network] }}" target="_blank" rel="noopener noreferrer"
                aria-label="{{ ucfirst($network) }}"><i class="fa-brands {{ $icon }}" aria-hidden="true"></i></a>
        @endif
    @endforeach
</div>
