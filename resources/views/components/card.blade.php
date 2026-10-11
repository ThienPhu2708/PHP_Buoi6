@props(['title' => ''])
<div style="border:1px solid #e5e7eb; border-radius:8px; padding:12px 16px; margin-bottom:16px;">
    @if($title)
        <h3 style="margin-top:0">{{ $title }}</h3>
    @endif
    {{ $slot }}
</div>
