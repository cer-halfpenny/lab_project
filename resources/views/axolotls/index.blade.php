<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Axolotls</title>
</head>
<body>
    <h1>Axolotls</h1>

    // Creating the text box the user types in, and an empty <ul> where we’ll show suggestions.
    <div>
        <label for="axolotl-search">Search by name:</label>
        <input type="text" id="axolotl-search" autocomplete="off">

        <ul id="axolotl-suggestions"></ul>
    </div>

    <h2>All Axolotls</h2>
    <ul>
        @foreach ($axolotls as $axolotl)
            <li>{{ $axolotl->name }}</li>
        @endforeach
    </ul>
</body>
</html>
