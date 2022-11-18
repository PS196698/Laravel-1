<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>landen</title>
</head>

<body>
    <h1 class="text-3xl font-bold font-mono">landen index</h1>
    <br>
    @section('content')
        @csrf
        @foreach ($landen as $land)
            <div class="grid grid-cols-[auto_fr] mx-2">
                <table class="bg-blue-600 text-center margin: 1px; text-black w-full shadow-none">
                    <thead>
                        <tr>
                            <th class="bg-blue-700 text-white p-2">ID</th>
                            <th class="bg-blue-700 text-white p-2">Naam</th>
                            <th class="bg-blue-700 text-white p-2">LandCode</th>
                            <th class="bg-blue-700 text-white p-2 w-auto">MuntEenheid</th>
                            <th class="bg-blue-700 text-white p-2">Regeringsvorm</th>
                            <th class="bg-blue-700 text-white p-2 w-auto">Inwonersaantal</th>
                            <th class="bg-blue-700 text-white p-2 w-auto">Staatshoofd</th>
                            <th class="bg-blue-700 text-white p-2 w-auto">Oppervlakte</th>
                            <th class="bg-blue-700 text-white p-2 w-auto">Budget</th>
                            <th class="bg-blue-700 text-white p-2 w-auto">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-blue-100 text-blue-900">
                            <td class="p-2">{{ $land->id }}</td>
                            <td class="p-2">{{ $land->Naam }}</td>
                            <td class="p-2">{{ $land->Landcode }}</td>
                            <td class="p-2">{{ $land->MuntEenheid }}</td>
                            <td class="p-2">{{ $land->Regeringsvorm }}</td>
                            <td class="p-2">{{ $land->inwonersaantal }}</td>
                            <td class="p-2">{{ $land->staatshoofd }}</td>
                            <td class="p-2">{{ $land->oppervlakte }}</td>
                            <td class="p-2">{{ $land->budget }}</td>
                            <td class="p-2">
                                <div class="flex-nowrap">
                                <a class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded-full" href="{{ route('landen.edit', $land->id) }}" class="btnNeutraleActie">Edit</a>
                                <form action="{{ route('landen.destroy', $land->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full" type="submit" value="Delete" class="btnVeiligeActie">
                                </form>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        @endforeach
        <br>
        <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full" href="{{ route('landen.create') }}" class="btnNeutraleActie">Create</a>
    </body>

    </html>
