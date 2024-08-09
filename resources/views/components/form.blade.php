{{-- Toutes les forms (formulaires) sont identiques, 
il y'a l''action (qui peut change)', la 'methode', @csrf et les method non html 
On va creer des props pour method et action 
--}}

@props([
    'method' => 'POST', /* POST est la methode par defaut */
    'action' => ''
])
<form 
    method="{{ $method === 'GET' ? 'GET' : 'POST' }}" {{-- si la method est GET alors genere GET sinon c'est POST par defaut --}}
    action="{{ $action }}" {{-- l'action est mise en dure --}}
    {{ $attributes }} {{-- si l'on veut ajouter une/des class --}}
>
    
    @csrf

    @if (! in_array($method, ['GET', 'POST']))    
        @method($method) 
    @endif
    {{-- @method('PATCH')  pour signifier que nous allons operé une modification --}}

    {{ $slot }}