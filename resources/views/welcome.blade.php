<x-layout>

    <div class="shadow sm:rounded sm:overflow-hidden mb-4">
        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
            <x-button class="bg-gray-400 hover:bg-gray-500" onclick="$modals.show('join-modal')">Join</x-button>
            <x-button class="bg-gray-400 hover:bg-gray-500" onclick="$modals.show('contact-modal')">Contact</x-button>
        </div>
    </div>

    <livewire:manage-users />

    <x-modals.join-modal />


{{--
    <x-modal name="contact-modal">
        <x-slot name="title">Contact</x-slot>
        <x-slot name="body">
        </x-slot>
        <x-slot name="footer">
            <x-button @click="show=false" class="bg-gray-400 hover:bg-gray-500">Close</x-button>
        </x-slot>
    </x-modal> --}}

    <script>
        window.$modals = {
            show(name) {
                window.dispatchEvent(
                    new CustomEvent('modal', {
                        detail: name
                    })
                );
            }
        }
    </script>

</x-layout>
