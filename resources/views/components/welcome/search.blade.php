<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

{{-- <script src="{{ asset('welcome/js/search.js') }}"></script> --}}

@vite('resources/css/app.css', 'resources/js/app.js')

<div class="m-2 p-1 flex items-center">
    <form action="{{ route('search') }}" method="GET" id="search-form" class="">
        <div class="space-y-10">
            <h1 class="text-center text-4xl font-bold">Search Employees</h1>
            <div class="flex items-center p-6 space-x-6 bg-white rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-500">
                <div class="flex bg-gray-100 p-4 w-72 space-x-4 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 opacity-30" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <input class="bg-gray-100 outline-none" type="text" name="query"
                        placeholder="Employee name or keyword..." />
                </div>

                <div
                    class="bg-red-600 py-3 px-5 text-white font-semibold rounded-lg hover:shadow-lg transition duration-3000 cursor-pointer">
                    <button type="submit">Search</button>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    $(document).ready(function () {
        // Handle form submission
        $('#search-form').submit(function (event) {
            event.preventDefault(); // Prevent the form from submitting normally

            // Get the form data
            var formData = $(this).serialize();

            // Send an AJAX request to perform the search
            $.ajax({
                url: '{{ route('search') }}',
                type: 'GET',
                data: formData,
                success: function (response) {
                    // Handle the search results
                    // Update the UI with the search results
                },
                error: function (xhr, status, error) {
                    // Handle the error
                    console.error(error);
                }
            });
        });
    });
</script>
