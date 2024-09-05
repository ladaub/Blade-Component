<x-layout>
{{-- le props type et son attribue color on ete cree dans le component flash
 --}}

 {{-- le title de ce model est la variable $title dans le component modal--}}
 <x-modal 
 title="Deactivate  Your Account?"
 submit-label="Deactivate"
 {{-- submit-label = "Deactivate" : cela cree une erreur a cause des espace avant et apres =--}}
 > 
    <x-slot name="trigger">
        <button @click="on = true" >Show modal</button>
    </x-slot>
        Are you sure you want to deactivate your account? All
        of your data will be permanently removed. This action cannot be undone.
 
 {{--     <x-flash type="error">
     You are now logged out 
    </x-flash>
    
    <br>
    
    <x-flash class="mt-10">
        Great Job
    </x-flash> --}}
    
</x-modal>
</x-layout>