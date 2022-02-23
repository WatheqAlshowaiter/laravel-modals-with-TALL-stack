<div {{ $attributes }}
    x-data="{show: @entangle($attributes->wire('model'))}"
    x-show="show"
    @keydown.escape.window="show=false"
    style="display: none"
>
    <div @click="show=false" class="fixed inset-0 bg-gray-900/90"></div>

    <div class="bg-white shadow-md max-w-sm h-48 m-auto rounded-md fixed top-0 inset-0" x-show="show" x-transition>
        <div class="flex flex-col h-full justify-between">
            <header class="p-6">
                <h3 class="font-bold text-lg">{{ $title }}</h3>
            </header>

            <main class="px-6 mb-4">{{ $body }}</main>

            <footer class="px-6 py-4 space-x-2 flex justify-end bg-gray-200 rounded-b-md">{{ $footer }}</footer>
        </div>
    </div>
</div>
