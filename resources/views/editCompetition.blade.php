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
                    Edycja konkurencji {{ $competition->description }}<br>
                    <form method="POST" action="{{ route('competition.update', $competition->id ) }}">
                        @csrf
                        @method('PUT')
                    <table>
                        <tr>
                            <td>
                                Opis konkurencji
                            </td>
                            <td>
                                Płeć zawodników
                            </td>
                            <td>
                                Działanie
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" class="w-30" name="description" id="description" value="{{ $competition->description }}">
                            </td>
                            <td>
                                <select name="sex" id="sex">
                                    <option value="1" {{ $competition->sex == 1 ? 'selected' : '' }}>Chłopcy</option>
                                    <option value="2" {{ $competition->sex == 2 ? 'selected' : '' }}>Dziewczynki</option>
                                </select>
                            </td>
                            <td>
                                <input type="submit" name="send" value="Zapisz zmiany" class="btn btn-dark btn-block"><br>
                                Usuń<br>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
