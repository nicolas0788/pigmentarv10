const btnTemarioLabial = document.getElementById("btn--temario_labial");
const btnTemarioCejas = document.getElementById("btn--temario_cejas");
const btnTemarioCapilar = document.getElementById("btn--temario_capilar");
const btnTemarioEstrias = document.getElementById("btn--temario_estrias");

btnTemarioLabial.addEventListener("click", function () {
  document.getElementById("btn--temario_labial_mas").classList.toggle("hidden");
  document
    .getElementById("btn--temario_labial_menos")
    .classList.toggle("hidden");
  document.getElementById("temario_labial").classList.toggle("hidden");
});

btnTemarioCejas.addEventListener("click", function () {
  document.getElementById("btn--temario_cejas_mas").classList.toggle("hidden");
  document
    .getElementById("btn--temario_cejas_menos")
    .classList.toggle("hidden");
  document.getElementById("temario_cejas").classList.toggle("hidden");
});

btnTemarioCapilar.addEventListener("click", function () {
  document
    .getElementById("btn--temario_capilar_mas")
    .classList.toggle("hidden");
  document
    .getElementById("btn--temario_capilar_menos")
    .classList.toggle("hidden");
  document.getElementById("temario_capilar").classList.toggle("hidden");
});

btnTemarioEstrias.addEventListener("click", function () {
  document
    .getElementById("btn--temario_estrias_mas")
    .classList.toggle("hidden");
  document
    .getElementById("btn--temario_estrias_menos")
    .classList.toggle("hidden");
  document.getElementById("temario_estrias").classList.toggle("hidden");
});
