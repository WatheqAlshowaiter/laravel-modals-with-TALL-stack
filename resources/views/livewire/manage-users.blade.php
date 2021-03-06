<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Name</th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($users as $user)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">{{ $user->name }}</div>
                                            <div class="text-sm text-gray-500">{{ $user->email }}</div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button wire:click="confirmDelete('{{ $user->id }}')"
                                        class="text-indigo-600 hover:text-indigo-900">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <form wire:submit.prevent="delete">
        <x-confirmation-modal wire:model.defer="showDeleteUserModel">
            <x-slot name="title">Delete user: "{{ optional($currentUser)->name }}"</x-slot>
            <x-slot name="body">Continuing will delete this item.</x-slot>
            <x-slot name="footer">
                <x-button wire:click="$set('showDeleteUserModel', false)" class="bg-gray-400 hover:bg-gray-500">Cancel
                </x-button>
                <x-button type="submit" wire:click="delete" class="bg-red-400 hover:bg-red-500">Delete</x-button>
            </x-slot>
        </x-confirmation-modal>
    </form>
</div>
