<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Category Name
                                </th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                    Added By (User ID - User Name)
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 0;    
                        @endphp
                        @foreach($categories as $category)
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                {{ ++$i }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $category->category_name }}
                            </td>
                            <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                                @foreach($users as $user)
                                @if($category->user_id === $user->id)
                                    {{ $category->user_id . " - " .$user->name }}
                                
                                @endif
                                @endforeach
                            </td>
                        </tr>
                        @endforeach
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                            </th>
                            <th scope="row"
                                class="px-6 py-4 ">
                            </th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                            </th>
                            <th scope="row"
                                class="px-6 py-4" style="text-align: center">
                                <a class="btn btn-primary" href="{{ route('category.form') }}">Add Category</a>
                            </th>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
</x-app-layout>
