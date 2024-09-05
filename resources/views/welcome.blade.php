<x-layout>

<x-section>
    <div class="flex justify-end">

        <x-dropdown>
            <x-slot name="trigger">
                <button>Click Me</button>
            </x-slot>
            
            <x-dropdown-link href="/">Two</x-dropdown-link>
            <x-dropdown-link href="/">One</x-dropdown-link>
            <x-dropdown-link href="/">Three</x-dropdown-link>
            
        </x-dropdown>
        
    </div>
     {{-- <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque in consequatur temporibus numquam cupiditate, architecto vitae totam nesciunt doloribus. Earum eligendi maxime veritatis aut ullam fuga sint sapiente ratione vel quam et ducimus dolorum cupiditate laborum, ad excepturi, modi qui?
     </p> --}}
</x-section>


{{-- le props type et son attribue color on ete cree dans le component flash
 --}}

 {{-- le title de ce model est la variable $title dans le component modal
 <x-modal 
 title="Deactivate  Your Account?"
 submit-label="Deactivate"--}}
 {{-- submit-label = "Deactivate" : cela cree une erreur a cause des espace avant et apres =
 > --}}
    {{-- <x-slot name="trigger">
        <button @click="on = true" >Show modal</button>
    </x-slot>
        Are you sure you want to deactivate your account? All
        of your data will be permanently removed. This action cannot be undone.
  --}}
 {{--     <x-flash type="error">
     You are now logged out 
    </x-flash>
    
    <br>
    
    <x-flash class="mt-10">
        Great Job
    </x-flash> 
    
</x-modal>--}}
</x-layout>