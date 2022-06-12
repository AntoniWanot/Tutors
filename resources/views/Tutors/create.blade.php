<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dodawanie korepetytora</title>
</head>

<body>
    <div class="container">
        <div class="nav">
            <a href="/">
                <h1>Strona główna</h1>
            </a>
            <a href="{{ route('tutors.list') }}">
                <h2>Lista</h2>
            </a>
        </div>
        <form action="{{ route('tutors.create') }}" method="post">
            @csrf
            <table>
                <tbody>
                    <tr>
                        <td><label for="name">Imie i nazwisko</label><input type="text" name="name" id="name"></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email</label><input type="text" name="email" id="email"></td>
                    </tr>
                    <tr>
                        <td><label for="phone_number">Numer telefonu</label><input type="text" name="phone_number"
                                id="phone_number"></td>
                    </tr>
                    <tr>
                        <td><label for="subject">Przedmiot</label><input type="text" name="subject" id="subject"></td>
                    </tr>
                    <tr>
                        <td><label for="rating">Ocena</label><input type="text" name="rating" id="rating"></td>
                    </tr>
                    <tr>
                        <td><label for="degree">Wykształcenie</label><input type="text" name="degree" id="degree"></td>
                    </tr>
                    <tr>
                        <td><label for="experience">Doświadczenie</label><input type="text" name="experience"
                                id="experience"></td>
                    </tr>
                </tbody>
            </table>
            <div><button type="submit">Dodaj</button></div>
        </form>
    </div>
</body>

</html>
