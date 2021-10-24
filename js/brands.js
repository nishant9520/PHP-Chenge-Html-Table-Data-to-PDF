$(document).ready(function () {
    // show data

    function showdata() {
        out = "";
        $.ajax({
            url: "brandsData.php",
            method: "GET",
            dataType: "json",
            success: function (databu) {
                // console.log(data);
                if (databu) {
                    x = databu;
                } else {
                    x = "";
                }
                for (i = 0; i < x.length; i++) {
                    out += "<tr><td>" + 
                     "</td><td>" + x[i].brand_id + 
                     "</td><td>" + x[i].brand_name + 
                     "</td><td>" + x[i].brand_active +
                     "</td><td>" + x[i].brand_status + 
                    "</td></tr>";
                }
                $("#butbody").html(out);
            },
        });
    }// end show data function

    showdata();
});