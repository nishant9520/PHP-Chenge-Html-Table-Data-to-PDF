$(document).ready(function () {
    // show data

    function showdata() {
        out = "";
        $.ajax({
            url: "itemDate.php",
            method: "GET",
            dataType: "json",
            success: function (dataoi) {
                // console.log(data);
                if (dataoi) {
                    x = dataoi;
                } else {
                    x = "";
                }
                for (i = 0; i < x.length; i++) {
                    out += "<tr><td>" + 
                    x[i].order_item_id +
                     "</td><td>" + x[i].order_id + 
                     "</td><td>" + x[i].product_id + 
                     "</td><td>" + x[i].quantity +
                     "</td><td>" + x[i].rate + 
                     "</td><td>" + x[i].total + 
                     "</td><td>" + x[i].order_item_status +
                     "</td><td>" + x[i].product_wise_discount + 
                     "</td><td>" + x[i].product_wise_discount_amount + 
                    "</td></tr>";
                }
                $("#oitbody").html(out);
            },
        });
    }// end show data function

    showdata();
});