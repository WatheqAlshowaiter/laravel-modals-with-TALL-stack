<x-modal name="join-modal">
    <x-slot name="title">Join</x-slot>
    <x-slot name="body">
        <p>here are some details about our plans</p>
    </x-slot>
    <x-slot name="footer">
        <x-button @click="show=false" class="bg-gray-400 hover:bg-gray-500">Close</x-button>
    </x-slot>
</x-modal>


