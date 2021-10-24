<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>order item</title>
</head>

<body>
<?php
    include('index.php');
    ?>
    <section class=" p-4" id="ordersTablesec" style="background-color: Aquamarine;">
        <ul class="nav justify-content-center mt-3 p-2">
            <li class="nav-item">
                <a id="uexfile" class="nav-link btn btn-outline-warning">Create Excel File </a>
            </li>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item">
                <label class="nav-link btn-warning">Order Item Table</label>
            </li>

            &nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item">
                <input type="button" class="nav-link btn btn-outline-warning" id="ubtnExport" value="Create PDF File " onclick="Export()" />

            </li>&nbsp;&nbsp;

        </ul>
        <table id="uBra" class="table table-dark table-striped mt-2">
            <thead>
                <th scope="col">user_id</th>
                <th scope="col">username</th>
                <th scope="col">password</th>
            </thead>
            <tbody id="utbody"></tbody>
        </table>
    </section>
    <script>
        document.getElementById('uexfile').addEventListener('click', function() {
            var table2excel = new Table2Excel();
            table2excel.export(document.querySelectorAll("#uBra"));
        });
    </script>
    <script type="text/javascript">
        function Export() {
            html2canvas(document.getElementById('uBra'), {
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
    <script src="js/user.js"></script>
    <script src="js/table2excel.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
</body>

</html>