<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mes demandes') }}
        </h2>
            <a href="/nouvelle-demande" class="inline-block px-4 py-2 mt-2 text-white bg-blue-500 rounded hover:bg-blue-700">
                {{ __('Nouvelle Demande') }}
            </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Date de demande
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Intitulé du post
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Etat
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($liste as $r)
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap dark:text-white">
                                    {{$r->created_at}}
                                </th>
                                <td class="px-6 py-4">
                                    {{$r->titre}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$r->status}}
                
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
