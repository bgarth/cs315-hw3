const form = document.querySelector("#physical-form")
form.addEventListener("submit", (e) => {
    const first_name = document.querySelector("#first-name").value;
    const last_name = document.querySelector("#last-name").value;
    const height = document.querySelector("#height").value;
    const weight = document.querySelector("#weight").value;

    if (first_name == null || first_name == "") {
        e.preventDefault();
        console.log("You must enter a first name");
    }
    if (last_name == null || last_name == "") {
        e.preventDefault();
        console.log("You must enter a last name");
    }
    /*if (height == null || height == "") {
        e.preventDefault();
        console.log("You must enter a height");
    }
    if (weight == null || weight == "") {
        e.preventDefault();
        console.log("You must enter a weight");
    }*/

    e.preventDefault();

    const info = {firstName:first_name, lastName:last_name, "height":height, "weight":weight};
    let jsonData = JSON.stringify(info);
    //localStorage.setItem("jsonInfo", jsonData)

    const outside_div = document.getElementById("outside-form-div");
    const p = document.createElement("p");
    p.innerHTML = jsonData;

    outside_div.appendChild(p);

});