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
                    <table>
                        <tr>
                            <td>
                                Konkurencja
                            </td>
                            <td>
                                Płeć zawodników
                            </td>
                            <td>
                                Akcje
                            </td>
                        </tr>
                    @forelse ( $competitions as $singleCompetition )
                            <tr><td>{{ $singleCompetition->description }}</td><td>{{ $singleCompetition->sex == 1 ? 'Chłopcy' : 'Dziewczynki' }}</td><td><a href="../competition/{{ $singleCompetition->id }}/edit">edytuj</a>   usuń</td></tr>

                    @empty
                        <tr><td colspan="3">Brak ddodanych konkurencji</td></tr>
                    @endforelse
                    </table>



                    Dodaj konkurencję<br>
                    <form method="post" action="{{ route('competition.store') }}">
                        @csrf
                        <table>
                            <tr>
                                <td>
                                    <label>Opis konkurencji</label>
                                </td>
                                <td>
                                    <label>Płeć zawodników</label>
                                </td>
                                <td>
                                    <label>Opcje</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="description" id="description">
                                </td>
                                <td>
                                    <select name="sex" id="sex">
                                        <option value="1">Chłopcy</option>
                                        <option value="2">Dziewczynki</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="submit" name="send" value="Dodaj" class="btn btn-dark btn-block">
                                </td>
                            </tr>
                        <!-- CROSS Site Request Forgery Protection -->
                    </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
