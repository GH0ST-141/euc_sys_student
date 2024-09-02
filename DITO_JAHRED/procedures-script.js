const procedureItems = document.querySelectorAll('.procedure-item');

procedureItems.forEach((item) => {
  item.addEventListener('click', () => {

    item.classList.toggle('active');
  });
});

function openNav() {
  document.getElementById("Sidenav").style.width = "250px";
}
function closeNav() {
  document.getElementById("Sidenav").style.width = "0";
}