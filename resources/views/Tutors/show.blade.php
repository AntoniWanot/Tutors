<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Korepetytor</title>
</head>

<body>
    <div class="container">
        <div class="nav">
            <a href="/home">
                <h1>Strona główna</h1>
            </a>
            <a href="{{ route('tutors.list') }}">
                <h2>Lista</h2>
            </a>
            <a href="{{ route('tutors.list') }}">
                <h2>Wyślij maila(na razie lista)</h2>
            </a>
        </div>
        <div class="tutor_data">
            <table>
                <tbody>
                    <tr>
                        <td>Imie i nazwisko</td>
                        <td>{{ $tutor->name }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ $tutor->email }}</td>
                    </tr>
                    <tr>
                        <td>Numer telefonu</td>
                        <td>{{ $tutor->phone_number }}</td>
                    </tr>
                    <tr>
                        <td>Przedmiot</td>
                        <td>{{ $tutor->subject }}</td>
                    </tr>
                    <tr>
                        <td>Ocena</td>
                        <td>{{ $tutor->rating }}</td>
                    </tr>
                    <tr>
                        <td>Wykształcenie</td>
                        <td>{{ $tutor->degree }}</td>
                    </tr>
                    <tr>
                        <td>Doświadczenie</td>
                        <td>{{ $tutor->experience }}</td>
                    </tr>
                </tbody>
            </table>
            <div>
                <a href="{{ route('tutors.update', ['id' => $tutor->id]) }}">
                    <h4>Edytuj rejestr</h4>
                </a>
            </div>
        </div>
    </div>
</body>

</html>
