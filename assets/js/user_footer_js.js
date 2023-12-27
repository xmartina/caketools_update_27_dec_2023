document.addEventListener("DOMContentLoaded", function() {
    // Get the target element
    var targetElement = document.getElementById("targetElement");

    // Remove the 'is-fixed' class
    if (targetElement) {
    targetElement.classList.remove("is-fixed");
}
});

document.addEventListener("DOMContentLoaded", function() {
    // Get the target element
    var targetElement = document.getElementById("targetElement");

    // Set interval to remove the 'is-fixed' class every 5 seconds
    if (targetElement) {
        setInterval(function() {
            targetElement.querySelector('.dashboard-user').classList.remove("is-fixed");
        }, 5); // 5000 milliseconds = 5 seconds
    }
});