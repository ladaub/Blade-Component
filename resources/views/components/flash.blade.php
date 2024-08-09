{{-- 
on cree une variable props 'type' qui sera appelé dans le code du component
on cree aussi son attribue 'color'
$type === 'succes' ? 'bg-green-4000' : 'bg-red-4000'
--}}
@props([
    
    'type' => 'sucess', //on cree un props de type
    'colors' => [
        'sucess'  => 'bg-green-400 border-green-500',
        'error'   => 'bg-red-400 border-red-500',
        'warning' => 'bg-orange-400 border-orange-500',
    ]
])

{{-- l'attribute bag declaré ici va supporter toutes les class que l'on declare ici
$attributes->merge veut dire, valide la class en associant tes class a celle pas defaut
 --}}
<section {{ $attributes->merge(['class' => "{ $colors[$type]} border-b p-4"]) }} class=" ">
 <div class="flex justify-between">
    <p>
        {{ $slot }}
    </p>

    <button>&times;</button>
 </div>
</section>