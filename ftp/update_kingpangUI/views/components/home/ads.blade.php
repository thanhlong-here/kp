@php
$ads = App\Models\Block::pull('home.ads')->first();
@endphp

<div class="container text-center">
    <a href="{{ empty($ads->link) ? '#' : url($ads->link) }}">
        @if (isset($ads->avatar))
            <img src="{{ asset($ads->avatar->src) }}" loading="lazy" class="img-fluid" />
        @endif
    </a>
</div>
