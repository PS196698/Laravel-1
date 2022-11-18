<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Edit</title>
</head>

<body>
    @if ($errors->any())
    <div class="error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <h1 class="text-3xl font-bold font-mono">Edit</h1>
    <br>

    <strong>Land: {{ $land->name }}</strong>
    <br>
    <input  class="text right-10" type="text" name="name" id="name" placeholder="naam" value="{{ old('Naam') }}"
        class="text-purple-700 w-5/6">
    <br>
    <strong>Landcode:</strong>
    <br>
    <input type="text" id="Landcode" placeholder="Landcode" value="{{ old('Landcode') }}"
        class="text-purple-700 w-5/6">
    <br>
    <strong>MuntEenheid: </strong>
    <br>
    <input type="text" name="MuntEenheid" id="MuntEenheid" placeholder="MuntEenheid" value="{{ old('MuntEenheid') }}"
        class="text-purple-700 w-5/6">
    <br>
    <strong>Regeringsvorm: </strong>
    <br>
    <input type="text" name="Regeringsvorm" id="Regeringsvorm" placeholder="Regeringsvorm"
        value="{{ old('Regeringsvorm') }}" class="text-purple-700 w-5/6">
    <br>
    <strong>Inwonersaantal: </strong>
    <br>
    <input type="text" name="inwonersaantal" id="inwonersaantal" placeholder="inwonersaantal"
        value="{{ old('inwonersaantal') }}" class="text-purple-700 w-5/6">
    <br>
    <strong>Staatshoofd: </strong>
    <br>
    <input type="text" name="staatshoofd" id="staatshoofd" placeholder="staatshoofd" value="{{ old('staatshoofd') }}"
        class="text-purple-700 w-5/6">
    <br>
    <strong>Oppervlakte: </strong>
    <br>
    <input type="text" name="Oppervlakte" id="Oppervlakte" placeholder="Oppervlakte" value="{{ old('Oppervlakte') }}"
        class="text-purple-700 w-5/6">
    <br>
    <strong>Budget: </strong>
    <br>
    <input type="text" name="budget" id="budget" placeholder="budget" value="{{ old('budget') }}"
        class="text-purple-700 w-5/6">
    <br>
    <br>

    <form>
        <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit" value="Edit" class="btnVeiligeActie">
        <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full"
         href="{{ route('landen.index') }}" class="btnNeutraleActie">Cancel</a>
    </form>
</body>

</html>
