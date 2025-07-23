let qualification = document.querySelector("#qualification");
const hssc = document.querySelector("#hssc-dev");
qualification.addEventListener("change", () => {
    if (qualification.value == "hssc") {
        hssc.classList.remove("d-none");
    } else {
        hssc.classList.add("d-none");
    }
});