const slider = document.getElementById("doctoresSlider");
const btnArriba = document.getElementById("btnArriba");
const btnAbajo = document.getElementById("btnAbajo");

btnArriba.addEventListener("click", () => {
    slider.scrollBy({
        top: -310,
        behavior: "smooth"
    });
});

btnAbajo.addEventListener("click", () => {
    slider.scrollBy({
        top: 310,
        behavior: "smooth"
    });
});