<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('web.dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Lista uniczów<br>
                    <table>
                        @foreach ( $swimmers as $singleSwimmer)
                            <tr><td>{{ $singleSwimmer->first_name }}</td><td>{{ $singleSwimmer->second_name }}</td><td>{{ $singleSwimmer->schoolClass->description }}</td><td>edytuj</td><td>usuń</td></tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
