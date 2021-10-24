$(document).ready(function () {
    function showdatas() {
        out = "";
        $.ajax({
            url: "orderData.php",
            method: "GET",
            dataType: "json",
            success: function (datacx) {
                // console.log(data);
                if (datacx) {
                    x = datacx;
                } else {
                    x = "";
                }
                for (i = 0; i < x.length; i++) {
                    out += "<tr><td>" +
                     x[i].order_id +
                     "</td><td>" + x[i].order_date + 
                     "</td><td>" + x[i].client_name + 
                     "</td><td>" + x[i].client_contact +
                     "</td><td>" + x[i].sub_total + 
                     "</td><td>" + x[i].vat + 
                     "</td><td>" + x[i].total_amount +
                     "</td><td>" + x[i].discount + 
                     "</td><td>" + x[i].grand_total + 
                     "</td><td>" + x[i].paid +
                     "</td><td>" + x[i].due + 
                     "</td><td>" + x[i].payment_type + 
                     "</td><td>" + x[i].payment_status +
                     "</td><td>" + x[i].payment_place +
                     "</td><td>" + x[i].gstn +
                     "</td><td>" + x[i].order_status +
                     "</td><td>" + x[i].user_id +
                    "</td></tr>";
                }
                $("#ortbody").html(out);
            },
        });
    }// end show data function

    showdatas();
    /************************************ */
}); //  end ready function