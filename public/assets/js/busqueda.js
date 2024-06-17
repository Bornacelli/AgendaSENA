$(function () {
    $('#tablaFiltro').DataTable({
        info: false,
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por páginas",
            "zeroRecords": "No se encontro ningun registro - Disculpa",
            "infoEmpty": "No records available",
            "search": "Buscar Registros:",
            "loadingRecords": "Cargando Registros...",
            "paginate": {
                "first": "Primera",
                "last": "Última",
                "next": "Siguiente",
                "previous": "Previa"
            }
        },

    });
});
$(function () {
    $('#Encuesta').DataTable({
        info: false,
        initComplete: function () {
            let columnadFicha = 3;
            this.api()
                .columns()
                .every(function (index) {
                    if (index === columnadFicha) {
                        let column = this;
                        let title = column.header().textContent;
                        // Create input element
                        let input = document.createElement('input');
                        input.placeholder = title;
                        input.size = 6;
                        column.header().appendChild(input);
                        // Event listener for user input
                        input.addEventListener('keyup', () => {
                            if (column.search() !== this.value) {
                                column.search(input.value).draw();
                            }
                        });
                    }
                });
        },
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por páginas",
            "zeroRecords": "No se encontro ningun registro - Disculpa",
            "infoEmpty": "No records available",
            "search": "Buscar Registros:",
            "loadingRecords": "Cargando Registros...",
            "paginate": {
                "first": "Primera",
                "last": "Última",
                "next": "Siguiente",
                "previous": "Previa"
            }
        },

    });
});