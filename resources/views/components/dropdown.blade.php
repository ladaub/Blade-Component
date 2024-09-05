{{-- En utilisant Alpine Js, on dit que cette div (x-data) open est false (donc ferme), 
@click.away veut nimporte ou sur la page --}}

@props(['alignment' = 'left'])

@php
    $alignmentClass = [
        'left' => 'left-0',
        'right' => 'right-0'
    ]
@endphp

<div class="relative" x-data="{ open: false}" @click.away="open = false">
    {{-- via cette div, on dit au click du bouton, si ce n'est pas ouvert, alors ouvre --}}
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    {{-- En utilisant Alpine Js, on dit ici que la visibilité de cette div est open c'est a dire ouvert --}}
    <div class=" absolute {{ $alignmentClass[$alignment] }} z-20 bg-white rounded shadow-md mt-2 w-40" x-show="open">
        {{ $slot }}
    </div>
</div>