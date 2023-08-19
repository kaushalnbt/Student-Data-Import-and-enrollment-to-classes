import "./bootstrap";

document.addEventListener("DOMContentLoaded", function () {
    const myButton = document.querySelector("#myButton");

    if (myButton) {
        myButton.addEventListener("click", function () {
            alert("Button clicked!");
        });
    }
});
