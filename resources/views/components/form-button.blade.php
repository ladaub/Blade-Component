{{-- ici on cree le composant form-button qui lui meme est contenu dans le composant form et cela pour beneficier du props de form --}}
<x-form action="{{ $action }}" method="{{ $method }}">
    <div class="mb-6">
        <button type="submit" {{ $attributes }}>
            {{-- on met un attributes ici pour appelé des classes dans le button lorsque le composant sera appelé
            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500" --}}
            {{ $slot }}
        </button>
    </div>
</x-form>
