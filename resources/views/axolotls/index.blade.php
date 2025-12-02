<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Axolotls</title>
</head>
<body>
    <h1>Axolotls</h1>

    {{-- Creating the text box the user types in, and an empty <ul> where we’ll show suggestions. --}} 
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

    <script>
        // - Gets references to the #axolotl-search input and #axolotl-suggestions list.
        // - On every input event, sends a GET request to "{{ route('axolotls.search') }}?q=...".
        // - Parses the JSON response (array of axolotls).
        // - Clears #axolotl-suggestions and fills it with <li> elements showing each axolotl name.
        // - If the search box is empty, clears the suggestions list.
        const searchInput = document.getElementById('axolotl-search');
        const suggestionsList = document.getElementById('axolotl-suggestions');

        const renderSuggestions = (items) => {
            suggestionsList.innerHTML = '';
            for (const { name } of items) {
                const li = document.createElement('li');
                li.textContent = name;
                suggestionsList.appendChild(li);
            }
        };

        searchInput.addEventListener('input', () => {
            const query = searchInput.value.trim();
            if (!query) {
                suggestionsList.innerHTML = '';
                return;
            }

            fetch(`{{ route('axolotls.search') }}?q=${encodeURIComponent(query)}`)
                .then((response) => response.json())
                .then(renderSuggestions)
                .catch(() => {
                    suggestionsList.innerHTML = '';
                });
        });
    </script>

</body>
</html>
