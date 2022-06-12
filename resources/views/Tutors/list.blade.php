<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutors list</title>
</head>

<body>
    <div class="container">
        <div class="nav">
            <a href="/home">
                <h1>Strona główna</h1>
            </a>
            <a href="{{ route('tutors.create') }}">
                <h2>Dodaj korepetytora</h2>
            </a>
        </div>
        <div class="list">
            <div class="filters">
                <form action="{{ route('tutors.list') }}" method="get">
                    <div class="filter" style="display:inline-block; margin right: 10px;">
                        <label for="name">Imie i nazwisko</label>
                        <input type="text" name="name" id="name">
                    </div>
                    <div class="filter" style="display:inline-block; margin right: 10px;">
                        <label for="subject">Przedmiot</label>
                        <input list="subject" type="text">
                        <datalist id="subject">
                            @foreach ($tutors as $tutor)
                                <option value="{{ $tutor->subject }}">
                            @endforeach
                        </datalist>
                    </div>
                    <div class="button" style="display:inline-block;">
                        <button type="submit">Filtruj</button>
                    </div>
                </form>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Lp</th>
                        <th>Imie</th>
                        <th>Przedmiot</th>
                        <th>Ocena</th>
                        <th>Szczegóły</th>
                        <th>Edytuj</th>
                        <th>Usuń</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tutors as $tutor)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $tutor->name }}</td>
                            <td>{{ $tutor->subject }}</td>
                            <td>{{ $tutor->rating }}</td>
                            <td><a href="{{ route('tutors.show', ['id' => $tutor->id]) }}">Szczegóły</a></td>
                            <td><a href="{{ route('tutors.update', ['id' => $tutor->id]) }}">Edytuj</a></td>
                            <td>
                                <form action="{{ route('tutors.destroy', ['id' => $tutor->id]) }}" method="post">
                                    @csrf
                                    <button type="submit">Usuń</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
