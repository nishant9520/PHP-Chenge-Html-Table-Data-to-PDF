$(document).ready(function () {
    // show data

    function showdata() {
        out = "";
        $.ajax({
            url: "CateData.php",
            method: "GET",
            dataType: "json",
            success: function (datac) {
                // console.log(data);
                if (datac) {
                    x = datac;
                } else {
                    x = "";
                }
                for (i = 0; i < x.length; i++) {
                    out += "<tr><td>" + x[i].categories_id +
                     "</td><td>" + x[i].categories_name + 
                     "</td><td>" + x[i].categories_active + 
                     "</td><td>" + x[i].categories_status +
                    "</td></tr>";
                }
                $("#tbody").html(out);
            },
        });
    }// end show data function

    showdata();

}); //  end ready function