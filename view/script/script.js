window.onload = () => {

    $("#adopt").on("click", () => {
            const type = document.getElementById("type").value;

            $.get("/controller/shelter.php?type=" + type, (url) => {
                $('#shelter').prepend('<img src="' + url + '" />')
                    // alert(url);
            });
        })
        // bind button and select to call the controller with ajax
        // you need to insert a new <img /> in the #shelter div and set the src based on the controller response
        // be smart.
};