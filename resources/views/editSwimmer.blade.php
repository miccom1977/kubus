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
                    Edycja ucznia {{ $swimmer->first_name }} {{ $swimmer->second_name }}<br>
                    <form method="POST" action="{{ route('swimmer.update', $swimmer->id ) }}">
                        @csrf
                        @method('PUT')
                    <table>
                        <tr>
                            <td>
                                Imię
                            </td>
                            <td>
                                Nazwisko
                            </td>
                            <td>
                                Płeć
                            </td>
                            <td>
                                Status
                            </td>
                            <td>
                                Konkurencje
                            </td>
                            <td>
                                Szkoła / klasa
                            </td>
                            <td>
                                Działanie
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" class="w-30" name="first_name" id="first_name" value="{{ $swimmer->first_name }}">
                            </td>
                            <td>
                                <input type="text" class="w-30" name="second_name" id="second_name" value="{{ $swimmer->second_name }}">
                            </td>
                            <td>
                                <select name="sex" id="sex">
                                    <option value="1" {{ $swimmer->sex == 1 ? 'selected' : '' }}>Chłopiec</option>
                                    <option value="2" {{ $swimmer->sex == 2 ? 'selected' : '' }}>Dziewczynka</option>
                                </select>
                            </td>
                            <td>
                                <select name="status" id="status">
                                    <option value="0" {{ $swimmer->status == 0 ? 'selected' : '' }}>BRAK</option>
                                    <option value="1" {{ $swimmer->status == 1 ? 'selected' : '' }}>BRĄZOWY</option>
                                    <option value="2" {{ $swimmer->status == 2 ? 'selected' : '' }}>SREBRNY</option>
                                    <option value="3" {{ $swimmer->status == 3 ? 'selected' : '' }}>ZŁOTY</option>
                                </select>
                            </td>
                            <td>
                                Konkurencje
                            </td>
                            <td>
                                {{ $swimmer->school->description }} / {{ $swimmer->schoolClass->description }}
                                <input type="hidden" name="school_class_id" value="{{ $swimmer->schoolClass->id }}"><br>
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
