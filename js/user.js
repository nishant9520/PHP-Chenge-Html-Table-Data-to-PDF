$(document).ready(function () {
    // show data

    function showdata() {
        out = "";
        $.ajax({
            url: "userData.php",
            method: "GET",
            dataType: "json",
            success: function (datau) {
                // console.log(data);
                if (datau) {
                    x = datau;
                } else {
                    x = "";
                }
                for (i = 0; i < x.length; i++) {
                    out += "<tr><td>" + 
                     "</td><td>" + x[i].user_id + 
                     "</td><td>" + x[i].username + 
                     "</td><td>" + x[i].password +
                    "</td></tr>";
                }
                $("#utbody").html(out);
            },
        });
    }// end show data function

    showdata();
});