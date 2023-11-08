// Get the form element
const form = document.querySelector("#physical-form")

// Event listener wait for the form to be submitted
form.addEventListener("submit", (e) => {
    // Get each element
    const first_name = document.querySelector("#first-name").value;
    const last_name = document.querySelector("#last-name").value;
    const height = document.querySelector("#height").value;
    const weight = document.querySelector("#weight").value;

    // Validates the entries
    if (first_name == null || first_name == "") {
        e.preventDefault();
        console.log("You must enter a first name");
    }
    if (last_name == null || last_name == "") {
        e.preventDefault();
        console.log("You must enter a last name");
    }

    // This prevents the page from reloading. This wouldn't normally be used, but
    // for the purposes of this assignment, it allows the json data to be displayed on the same page.
    e.preventDefault();

    // Create string of json data and display it
    const info = {firstName:first_name, lastName:last_name, "height":height, "weight":weight};
    let jsonData = JSON.stringify(info);

    const outside_div = document.getElementById("outside-form-div");
    const p = document.createElement("p");
    p.innerHTML = jsonData;

    outside_div.appendChild(p);

});