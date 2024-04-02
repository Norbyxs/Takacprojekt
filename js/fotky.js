var velkeFotky = document.getElementById("velkeFotky");
var velkeFotkyImg = document.getElementById("velkeFotkyImg");
const zavriet2 = document.querySelector(".closex")

function openFullImg(pic) {
    velkeFotky.style.display = "flex";
    velkeFotkyImg.src = pic;
}

function closeFullImg() {
    velkeFotky.style.display = "none";
}
function closeFullImg() {
    var velkeFotky = document.getElementById("velkeFotky");
    velkeFotky.style.display = "none";
}

closex.addEventListener("click", () => {
    velkeFotky.style.display = "none"
})
function openFullImg(pic, menoryby, desryby) {
    var velkeFotky = document.getElementById("velkeFotky");
    var velkeFotkyImg = document.getElementById("velkeFotkyImg");
    var menoryby2 = document.getElementById("menoryby");
    var desryby2 = document.getElementById("desryby");

    velkeFotky.style.display = "flex";


    velkeFotkyImg.src = pic;

    menoryby2.innerText = menoryby;
    desryby2.innerText = desryby;
}




