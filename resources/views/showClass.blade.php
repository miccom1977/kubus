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
                    Uczniowie klasy  {{ $class->description }}<br>
                    <table>
                        @foreach ( $class->swimmer as $singleSwimmer)
                            <tr><td>{{ $singleSwimmer->first_name }}</td><td>{{ $singleSwimmer->second_name }}</td><td><a href="../swimmer/{{ $singleSwimmer->id }}/edit">edytuj</a></td><td>usuń</td></tr>
                        @endforeach
                    </table>
                    <form method="post" action="{{ route('swimmer.store') }}">
                        @csrf
                        <table width="100%">
                            <tr>
                                <td>
                                    <label>Imię</label>
                                    <input type="text" name="first_name" id="first_name"><br>
                                    <label>Nazwisko</label>
                                    <input type="text" name="second_name" id="second_name"><br>
                                    <input type="hidden" name="school_class_id" id="school_class_id" value="{{ $class->id }}"><br>
                                    <input type="submit" name="send" value="Dodaj szkołę" class="btn btn-dark btn-block">
                                </td>
                            </tr>
                        </table>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
