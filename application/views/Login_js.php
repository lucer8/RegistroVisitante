<script type="text/javascript">
    $("#botonLogin").click(function() {
        var usuario = $('#Usuario_Nombre').val();
        var contrasena = $('#Usuario_Contraseña').val();
        $.ajax({

                type: 'POST',
                url: '<?= base_url() ?>Ingreso_Sistema/ingresar',
                data: {
                    'usuario': usuario,
                    'contrasena': contrasena
                },
                dataType: 'json'
            })
            .done(function(data) {
                if (data['total'] > 0) {
                    if (data['datos']['PersonaRol_Id'] == 3) {
                        window.location.href = ' <?= base_url() ?>Registro';
                    } else if (data['datos']['PersonaRol_Id'] == 1) {
                        window.location.href = ' <?= base_url() ?>Admin';
                    } else if (data['datos']['PersonaRol_Id'] == 2) {
                        window.location.href = ' <?= base_url() ?>Departamento';
                    }
                } else {

                    Swal.fire(
                        'Error',
                        'El usuario y/o contraseña son incorrectos',
                        'error'
                    )
                }

            })

            .fail(function() {

                Swal.fire(
                    'Error',
                    'Error al establecer conexión',
                    'error',
                )

            })


    })
</script>