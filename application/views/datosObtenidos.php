<form method="post" action="Datos/informesDatos">
    <div class="table-responsive" id="mydatatable-container">
        <table class="records_list table table-striped table-bordered table-hover" id="mydatatable">
            <thead>
                <tr>
                    <th scope="col">Área</th>
                    <th scope="col">Procedencia </th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Rango de edad</th>
                    <th scope="col">Fecha de registro</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Filter..</th>
                    <th>Filter..</th>
                    <th>Filter..</th>
                    <th>Filter..</th>
                    <th>Filter..</th>

                </tr>
            </tfoot>
            <tbody>
                <?php
                for ($i = 0; $i < count($datos); $i++) {
                ?>
                    <tr>
                        <th><?= $datos[$i]['Area_Nombre'] ?></th>
                        <td><?= $datos[$i]['Procedencia_Nombre'] ?></td>
                        <td><?= $datos[$i]['Persona_Sexo'] ?></td>
                        <th><?= $datos[$i]['Edad_Rango'] ?></th>
                        <th><?= $datos[$i]['Persona_FechaCreacion'] ?></th>
                    </tr>
                <?php }  ?>

            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#mydatatable tfoot th').each(function() {
                var title = $(this).text();
                $(this).html('<input type="text" placeholder="Filtrar.." />');
            });

            var table = $('#mydatatable').DataTable({
                "dom": 'B<"float-left"i><"float-right"f>t<"float-left"l><"float-right"p><"clearfix">',
                "responsive": false,
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
                },
                "order": [
                    [0, "desc"]
                ],
                "initComplete": function() {
                    this.api().columns().every(function() {
                        var that = this;

                        $('input', this.footer()).on('keyup change', function() {
                            if (that.search() !== this.value) {
                                that
                                    .search(this.value)
                                    .draw();
                            }
                        });
                    })
                },
                "buttons": ['excel', 'pdf', 'print']
            });
        });
    </script>
    </body>
</form>