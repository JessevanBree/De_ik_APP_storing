$(document).ready(function() {
    $("#readCB").click(function() {
        $("#readButton").attr("disabled", !this.checked);
    });
    $("#readButton").click(function() {
        window.location = '/questionform';
    });
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', function() {
            navigator.serviceWorker.register('/sw.js').then(function(registration) {
                // Registration was successful
                console.log('ServiceWorker registration successful with scope: ', registration.scope);
            }, function(err) {
                // registration failed :(
                console.log('ServiceWorker registration failed: ', err);
            });
        });
    }
})