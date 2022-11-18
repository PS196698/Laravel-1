<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Create</title>
</head>

<body>
    <form action="{{ route('landen.store') }}" method="POST">
        @csrf
        <h1 class="text-3xl font-bold font-mono">Create</h1>
        <br>

        <strong>Land:</strong>
        <br>
        <input class="text right-10" type="text" name="Naam" placeholder="naam" class="text-purple-700 w-5/6">
        <br>
        <strong>Landcode:</strong>
        <br>
        <input type="text" name="Landcode" placeholder="Landcode" value="{{ old('Landcode') }}"
            class="text-purple-700 w-5/6">
        <br>
        <strong>MuntEenheid: </strong>
        <br>
        <input type="text" name="MuntEenheid" placeholder="MuntEenheid" class="text-purple-700 w-5/6">
        <br>
        <strong>Regeringsvorm: </strong>
        <br>
        <input type="text" name="Regeringsvorm" placeholder="Regeringsvorm" class="text-purple-700 w-5/6">
        <br>
        <strong>Inwonersaantal: </strong>
        <br>
        <input type="text" name="inwonersaantal" placeholder="inwonersaantal" class="text-purple-700 w-5/6">
        <br>
        <strong>Staatshoofd: </strong>
        <br>
        <input type="text" name="staatshoofd" placeholder="staatshoofd" class="text-purple-700 w-5/6">
        <br>
        <strong>Oppervlakte: </strong>
        <br>
        <input type="text" name="oppervlakte" placeholder="Oppervlakte" class="text-purple-700 w-5/6">
        <br>
        <strong>Budget: </strong>
        <br>
        <input type="text" name="budget" placeholder="budget" class="text-purple-700 w-5/6">
        <br>
        <br>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit"
            value="Create" class="btnVeiligeActie">
        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full"
            href="{{ route('landen.index') }}" class="btnNeutraleActie">Cancel</button>
    </form>
</body>

</html>
