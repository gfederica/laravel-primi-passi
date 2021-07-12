<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <title>Laravel</title>

    <style>   
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        } 

        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        header {
            height: 50px;
            background-color:azure;
            display: flex;
            align-items: center;
        }
        h2 {
            padding: 10px;
        }

        main {
            background-color: beige;
            padding: 20px 0;
        }
        section {
            width: 50%;
        }
        .container {
            width: 80%;
            background-color: azure;
            padding: 100px;
        }
        .flex {
            display: flex;
            margin: auto;
            align-items: flex-start;
            
        }
        .p-3 {
            padding: 30px;
        }
    </style>

</head>
<body>
    <header>
        <h2>Ciao, {{$username}}</h2>
    </header>
    <main>
        <div class="container flex">
            <section class="p-3">
                <h4>Libri disponibili:</h4>
                <ul>
                    @foreach ($available_books as $available_book)
                        <li>{{$available_book}}</li>
                    @endforeach
                </ul>
            </section>
            <section class="p-3">
                <h4>Devi restituire questi titoli:</h4>
                <ul>
                    @forelse ($not_available_books as $not_available_book)
                        <li>{{ $not_available_book }}</li>
                    @empty
                        <p>Non hai libri da restituire!</p>
                    @endforelse
                </ul>
            </section>
        </div>
    </main>
</body>
</html>