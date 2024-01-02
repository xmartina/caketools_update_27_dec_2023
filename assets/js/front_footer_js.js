$("#logoutBtn").click(function() {
    // Trigger the click event of the submit button
    $("#logout").click();
});

// Wallet Connect form validation
// Define the submitForm function before it is referenced
// function submitForm() {
//     // Display loader
//     document.getElementById("loader").style.display = "block";
//
//     // Simulate a 3-second delay (adjust as needed)
//     setTimeout(function() {
//         // Hide loader
//         document.getElementById("loader").style.display = "none";
//
//         // Display error message
//         document.getElementById("errorMessage").innerHTML = "Unable to connect wallet. Please try again.";
//         document.getElementById("errorMessage").style.display = "block";
//     }, 3000); // 3000 milliseconds = 3 seconds
// }