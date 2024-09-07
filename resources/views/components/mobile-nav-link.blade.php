@props(['route']) {{-- route represente ici le lien, il remplace href en dehor du composant--}}
{{-- on rend les lien dynamiques, le lien selectionner aura son style --}}
@php
    $classes = Request::routeIs($route) ? 'bg-blue-500' : 'hover:text-blue-500';
@endphp

{{-- le lien href sera route et $route sera l'argument --}}
<a href="{{ route($route) }}" {{ $attributes->merge(['class' => "block p-2 rounded {$classes}"]) }}>
    {{ $slot }}
</a>