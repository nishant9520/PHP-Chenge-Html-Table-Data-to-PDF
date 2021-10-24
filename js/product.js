$(document).ready(function () {
    // show data

    function showdata() {
        out = "";
        $.ajax({
            url: "productData.php",
            method: "GET",
            dataType: "json",
            success: function (datap) {
                // console.log(data);
                if (datap) {
                    x = datap;
                } else {
                    x = "";
                }
                for (i = 0; i < x.length; i++) {
                    out += "<tr><td>" + 
                    x[i].product_id +
                     "</td><td>" + x[i].product_name + 
                     "</td><td>" + x[i].product_image + 
                     "</td><td>" + x[i].brand_id +
                     "</td><td>" + x[i].categories_id + 
                     "</td><td>" + x[i].quantity + 
                     "</td><td>" + x[i].rate +
                     "</td><td>" + x[i].active + 
                     "</td><td>" + x[i].status + 
                     "</td><td>" + x[i].cost_price + 
                    "</td></tr>";
                }
                $("#ptbody").html(out);
            },
        });
    }// end show data function

    showdata();
});