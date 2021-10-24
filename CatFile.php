<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>brandsTable</title>
</head>

<body>
    <?php
    include('index.php');
    ?>
    <section id="brandsTablesec" style="background-color: Aquamarine;">
        <ul class="nav justify-content-center mt-3 p-2">
            <li class="nav-item">
                <a id="exfile" class="nav-link btn btn-outline-warning">Create Excel File </a>
            </li>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item">
                <label class="nav-link btn-warning">Brands Table</label>
            </li>

            &nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item">
                <input type="button" class="nav-link btn btn-outline-warning" id="btnExport" value="Create PDF File " onclick="Export()" />

            </li>&nbsp;&nbsp;

        </ul>
        <table id="Bra" class="table table-dark table-striped mt-2">
            <thead>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Active</th>
                <th scope="col">Status</th>
            </thead>
            <tbody id="tbody"></tbody>
        </table>
    </section>
    <!--  *****************************-->
    <script>
        document.getElementById('exfile').addEventListener('click', function() {
            var table2excel = new Table2Excel();
            table2excel.export(document.querySelectorAll("#Bra"));
        });
    </script>
    <script type="text/javascript">
        function Export() {
            html2canvas(document.getElementById('Bra'), {
                onrendered: function(canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Table.pdf");
                }
            });
        }
    </script>
    <script src="js/jquery.js"></script>
    <script src="js/javascript.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/cate.js"></script>
    <script src="js/table2excel.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
</body>

</html>