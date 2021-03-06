$('#search').on('keyup', function() {
    $value = $(this).val();
    $.ajax({
        type: 'get',
        url: '{{ URL::to('search') }}',
        data: {
            'search': $value
        },
        success: function(data) {
            $('tbody').html(data);
        }
    });
})

$.ajaxSetup({
    headers: {
        'csrftoken': '{{ csrf_token() }}'
    }
});