function remover(url) {
    Swal.fire({
        title: 'Deseja realmente remover esse registro?',
        text: "Você não poderá reverter essa operação!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, remover mesmo assim!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: url,
                type: 'DELETE',
                success: function (result) {
                    result = JSON.parse(result);

                    if (result.success) {
                        Swal.fire(
                            'Removido!',
                            'O registro foi removido com sucesso!',
                            'success'
                        ).then((result) => {
                            location.reload();
                        });
                    } else {
                        Swal.fire('Erro!', result.mensagem, 'error');
                    }

                },
                error: function (result) {
                    Swal.fire('Erro!', 'Ocorreu um erro ao remover o registro. <br><b>Entre em contacto com o suporte.<b>', 'error');
                }
            });
        }
    });
}