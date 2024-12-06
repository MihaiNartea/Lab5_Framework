<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Panel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-4">{{ __('User List') }}</h3>
                    <table class="table-auto w-full border-collapse border border-gray-700 dark:border-gray-500">
                        <thead>
                            <tr>
                                <th class="border border-gray-700 dark:border-gray-500 px-4 py-2">{{ __('ID') }}</th>
                                <th class="border border-gray-700 dark:border-gray-500 px-4 py-2">{{ __('Name') }}</th>
                                <th class="border border-gray-700 dark:border-gray-500 px-4 py-2">{{ __('Email') }}</th>
                                <th class="border border-gray-700 dark:border-gray-500 px-4 py-2">{{ __('Role') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td class="border border-gray-700 dark:border-gray-500 px-4 py-2 text-center">{{ $user->id }}</td>
                                    <td class="border border-gray-700 dark:border-gray-500 px-4 py-2">{{ $user->name }}</td>
                                    <td class="border border-gray-700 dark:border-gray-500 px-4 py-2">{{ $user->email }}</td>
                                    <td class="border border-gray-700 dark:border-gray-500 px-4 py-2 text-center">
                                        {{ $user->role }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
