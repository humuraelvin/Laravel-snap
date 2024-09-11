<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>


    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 p-4">
        <form method="post" action="{{ route('notes.store') }}" class="mt-6 space-y-6">
            @csrf

            <div>
                <x-input-label for="title" :value="__('Name')" />
                <x-text-input id="title" title="title" type="text" class="mt-1 block w-full" :value="old('title')"
                    required autofocus autocomplete="title" />
                <x-input-error class="mt-2" :messages="$errors->get('title')" />
            </div>


            <div class="flex items-center gap-4">
                <x-primary-button>{{ __('Create') }}</x-primary-button>


            </div>
        </form>
    </div>

</x-app-layout>