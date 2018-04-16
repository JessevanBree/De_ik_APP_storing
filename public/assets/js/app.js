$(document).ready(function(){
    $("#readCB").click(function() {
        $("#readButton").attr("disabled", !this.checked);
    });
})

