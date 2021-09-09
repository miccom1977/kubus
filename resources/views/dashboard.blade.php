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
                    <table class="schoolList">
                        @forelse ( $schools as $singleSchool)
                            <tr>
                                <td style="width:35%">
                                    Szkoła {{ $singleSchool->description }}
                                </td>
                                <td style="width:35%">
                                    @forelse ( $singleSchool->classes as $singleClass)
                                        <a href="/schoolClass/{{ $singleClass->id }}">{{ $singleClass->description }}</a><br>
                                    @empty
                                        Brak dodanych klas w tej szkole<br>
                                    @endforelse
                                </td>
                                <td style="width:30%">
                                    Dodaj do tej szkoły nową klasę<br>
                                    <form method="post" action="{{ route('schoolClass.store') }}">
                                        @csrf
                                        <label>Nazwa Klasy</label>
                                        <input type="text" name="description" id="description"><br>
                                        <label>Dzień zajęć</label>
                                        <select name="day">
                                            <option value="1">Poniedziałek</option>
                                            <option value="2">Wtorek</option>
                                            <option value="3">Środa</option>
                                            <option value="4">Czwartek</option>
                                            <option value="5">Piątek</option>
                                          </select><br>
                                        <label>Godzina zajęć</label>
                                        <select name="hour">
                                            <option value="8">8.00</option>
                                            <option value="9">9.00</option>
                                            <option value="10">10.00</option>
                                            <option value="11">11.00</option>
                                            <option value="12">12.00</option>
                                            <option value="13">13.00</option>
                                            <option value="14">14.00</option>
                                          </select><br>
                                        <input type="hidden" name="school_id" value="{{ $singleSchool->id }}"><br>
                                        <input type="submit" name="send" value="Dodaj Klasę" class="btn btn-dark btn-block">
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2">
                                    Brak szkół<br>
                                    Dodaj nową szkołę:<br>
                                    <form method="post" action="{{ route('school.store') }}">
                                        @csrf
                                        <table width="100%">
                                            <tr>
                                                <td>
                                                    <label>Nazwa Szkoły</label>
                                                    <input type="text" name="description" id="description"><br>
                                                    <input type="hidden" name="year" id="year" value="{{ env('APP_YEAR') }}"><br>
                                                    <input type="submit" name="send" value="Dodaj szkołę" class="btn btn-dark btn-block">
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                </td>
                            </tr>
                        @endforelse
                    </table><br><br>
                    Dodaj nową szkołę
                        <form method="post" action="{{ route('school.store') }}">
                            @csrf
                            <table width="100%">
                                <tr>
                                    <td>
                                        <label>Nazwa Szkoły</label>
                                        <input type="text" name="description" id="description"><br>
                                        <input type="hidden" name="year" id="year" value="{{ env('APP_YEAR') }}"><br>
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
