<x-app-layout :title="$title">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>


    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 p-4">
        <x-amber-btn-link :href="route('notes.index')" class="mb-5">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
            </svg>
            Back
        </x-amber-btn-link>

        <div class="w-full mx-auto bg-white dark:bg-gray-800 shadow-md rounded-md overflow-hidden">
            <div class="p-6">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">
                    {{ $note->title }}
                </h2>
                <p class="text-gray-600 dark:text-gray-700 mt-2">
                    {{ $note->body }}
                </p>
            </div>
            <div class="flex justify-end p-4 bg-gray-100 dark:bg-gray-700">
                <x-cyan-btn-link class='mr-2' :href="route('notes.edit', $note)">Edit</x-cyan-btn-link>
                <form method="POST" action="{{ route('notes.destroy', $note) }}">
                    @csrf
                    @method('delete')
                     <x-danger-button onclick="return confirm('Are you sure, you want to delete this Note?')">Delete</x-danger-button>

                </form>
            </div>
        </div>

    </div>

</x-app-layout>