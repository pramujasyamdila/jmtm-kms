<script>
    $(document).ready(function() {
        $('.table').DataTable({
            "ordering": false,
            "info": true,
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'copyHtml5',
                    text: '<i class="fas fa-file"> Copy</i>',
                    titleAttr: 'Copy'
                },
                {
                    extend: 'excelHtml5',
                    text: '<i class="fas fa-file-excel"> Excel</i>',
                    titleAttr: 'Excel'
                },
                {
                    extend: 'csvHtml5',
                    text: '<i class="fas fa-file"> Csv</i>',
                    titleAttr: 'CSV'
                },
                {
                    extend: 'pdfHtml5',
                    text: '<i class="fas fa-file-pdf"> Pdf</i>',
                    titleAttr: 'PDF'
                }
            ]
        });
    });
</script>