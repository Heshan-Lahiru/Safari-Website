const catContainer = document.getElementById("moving-cat");
let direction = "right";

function moveCat() {
  if (direction === "right") {
    catContainer.style.left = parseInt(catContainer.style.left) + 10 + "px";
  } else {
    catContainer.style.left = parseInt(catContainer.style.left) - 10 + "px";
  }

  if (catContainer.offsetLeft <= 0) {
    direction = "right";
  } else if (catContainer.offsetLeft + catContainer.offsetWidth >= window.innerWidth) {
    direction = "left";
  }

  requestAnimationFrame(moveCat);
}

requestAnimationFrame(moveCat);
