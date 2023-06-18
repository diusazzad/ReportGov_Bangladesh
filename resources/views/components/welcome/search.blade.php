<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
@vite('resources/css/app.css', 'resources/js/app.js')


<div class="m-5 p-2 flex items-center justify-center">
    <input id="search" class="bg-gray-100 outline-none px-4 py-2 rounded-lg hover:bg-cyan-600 hover:text-white text-center" type="text" name="query"
        placeholder="Employee name" />
</div>

<table>
    <tbody class="bg-white">
        <!-- Search results will be dynamically populated here -->
    </tbody>
</table>

<script type="text/javascript">
    $(document).ready(function () {
        $('#search').on('keyup', function () {
            var value = $(this).val();
            $.ajax({
                type: 'get',
                url: '{{ URL::to('search') }}',
                data: { 'search': value },
                success: function (data) {
                    $('tbody').html(data);
                }
            });
        });
    });
</script>
<script type="text/javascript">
    $.ajaxSetup({ headers: { 'csrftoken': '{{ csrf_token() }}' } });
</script>

