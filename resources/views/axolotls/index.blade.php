<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Axolotls</title>
</head>
<body>
    <h1>Axolotls</h1>

    <h2>All Axolotls</h2>
    <ul>
        @foreach ($axolotls as $axolotl)
            <li>{{ $axolotl->name }}</li>
        @endforeach
    </ul>
</body>
</html>
