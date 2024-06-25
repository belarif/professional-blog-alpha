"use_strict";

document.addEventListener("DOMContentLoaded", () => {
  const modal = document.querySelector(".modal-tools");
  const modalBtn = document.querySelector("#close-modal-tools");

  modalBtn.addEventListener("click", () => {
    modal.style.display = "none";
  });
});
