<x-header>
    {{ $content ?? '' }}
</x-header>

{{ $slot }}

<x-navbar></x-navbar>

<x-footer></x-footer>