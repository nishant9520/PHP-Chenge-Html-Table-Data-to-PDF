<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>order table</title>
</head>

<body>
<?php
    include('index.php');
    ?>
    <section class=" p-4" id="ordersTablesec" style="background-color: Aquamarine;">
        <ul class="nav justify-content-center mt-3 p-2">
            <li class="nav-item">
                <a id="orexfile" class="nav-link btn btn-outline-warning">Create Excel File </a>
            </li>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item">
                <label class="nav-link btn-warning">Order Table</label>
            </li>

            &nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item">
                <input type="button" class="nav-link btn btn-outline-warning" id="orbtnExport" value="Create PDF File " onclick="Export()" />

            </li>&nbsp;&nbsp;

        </ul>
        <table id="orBra" class="table table-dark table-striped mt-2">
            <thead>
                <th scope="col">order_id</th>
                <th scope="col">order_date</th>
                <th scope="col">client_name</th>
                <th scope="col">client_contact</th>
                <th scope="col">sub_total</th>
                <th scope="col">vat</th>
                <th scope="col">total_amount</th>
                <th scope="col">discount</th>
                <th scope="col">grand_total</th>
                <th scope="col">paid</th>
                <th scope="col">due</th>
                <th scope="col">payment_type</th>
                <th scope="col">payment_status</th>
                <th scope="col">payment_place</th>
                <th scope="col">gstn</th>
                <th scope="col">order_status</th>
                <th scope="col">user_id</th>
            </thead>
            <tbody id="ortbody"></tbody>
        </table>
    </section>
    <script>
        document.getElementById('orexfile').addEventListener('click', function() {
            var table2excel = new Table2Excel();
            table2excel.export(document.querySelectorAll("#orBra"));
        });
    </script>
    <script type="text/javascript">
        function Export() {
            html2canvas(document.getElementById('orBra'), {
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
    <script src="js/order.js"></script>
    <script src="js/table2excel.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
</body>

</html>