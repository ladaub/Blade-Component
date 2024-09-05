<x-layout>
{{-- le props type et son attribue color on ete cree dans le component flash
 --}}

 <x-modal title="Desactivate Account">
    <x-slot name="tigger">
        <button @click="on = true" >Show modal</button>
    Are you sure?
 </x-modal>
 
{{--     <x-flash type="error">
        You are now logged out 
    </x-flash>

    <br>

    <x-flash class="mt-10">
        Great Job
    </x-flash> --}}

</x-layout>