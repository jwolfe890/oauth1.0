$(document).ready(function(){


    $("#registerSubmit").submit(function( e ) {
    e.preventDefault();
        $.ajax({
            url: "./db_queries/create.php",
            method: "post",
            data: $(this).serialize(),
            dataType: "text",
            success: function(result) {
                if (result.trim() == "Invalid email and/or password." || result.trim() == "Email and/or password taken.") {
                    $('#result').text(result.trim())
                } else {
                    window.location.href = "./user-profile.php"
                }
            }
        })
    });

    $("#registerEdit").submit(function( e ) {
        e.preventDefault();
            $.ajax({
                url: "./db_queries/edit.php",
                method: "post",
                data: $(this).serialize(),
                dataType: "text",
                success: function(Result) {
                    window.location.href = "./allUsers.php"
                }
            })
        });

        $("#registerLogin").submit(function( e ) {
            e.preventDefault();
                $.ajax({
                    url: "./db_queries/loginQuery.php",
                    method: "post",
                    data: $(this).serialize(),
                    dataType: "text",
                    success: function(result) {
                        if (result.trim() == "Email not found. Sign up or try a different email.") {
                            $('#result').text(result.trim())
                        } else {
                            window.location.href = "./user-profile.php"
                        }
                    }
                })
            });

}); 

