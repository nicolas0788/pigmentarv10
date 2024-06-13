document.addEventListener("DOMContentLoaded", function () {
  const barraHamburguesa = document.getElementById("barraHamb");

  barraHamburguesa.addEventListener("click", function () {
    document.getElementById("barraHamb_a").classList.toggle("barraHamb_open_a");
    document.getElementById("barraHamb_b").classList.toggle("barraHamb_open_b");
    document.getElementById("barraHamb_c").classList.toggle("barraHamb_open_c");
    document
      .getElementById("nav_container")
      .classList.toggle("nav_container_open");
  });
});
