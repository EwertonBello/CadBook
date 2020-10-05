$(document).ready(function () {

    $("body").on("click",".deleteBook",function(e){

        if(!confirm("A exclusão será permanente, deseja continuar?")) {
            return false;
        }

        e.preventDefault();
        let id = $(this).data("id");
        let token = $("input[name='_token']")[0].value;
        let url = this.href;
        let row = $(this).closest('tr');

        console.log(url);

        $.ajax(
            {
                url: url,
                type: 'DELETE',
                data: {
                    _token: token,
                    id: id
                },
                success: function (response){

                    Swal.fire(
                        'Concluído!',
                        response.message,
                        'success'
                    );
                    row.remove();
                }
            });
        return false;
    });
});
