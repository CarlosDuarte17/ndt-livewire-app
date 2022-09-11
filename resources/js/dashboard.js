import {createPopper} from "@popperjs/core";

/* Make dynamic date appear */
(function () {
  if (document.getElementById("get-current-year")) {
    document.getElementById("get-current-year").innerHTML = new Date()
      .getFullYear()
      .toString();
  }
})();

document.querySelectorAll("[data-navbar]").forEach((element) => {
  element.addEventListener("click", () => toggleNavbar(element.dataset.target));
});

/* Sidebar - Side navigation menu on mobile/responsive mode */
function toggleNavbar(collapseID) {
  document.getElementById(collapseID).classList.toggle("hidden");
  document.getElementById(collapseID).classList.toggle("bg-white");
  document.getElementById(collapseID).classList.toggle("m-2");
  document.getElementById(collapseID).classList.toggle("py-3");
  document.getElementById(collapseID).classList.toggle("px-6");
}

document.querySelectorAll("[data-dropdown]").forEach((element) => {
  element.addEventListener("click", (event) =>
    openDropdown(event, element.dataset.target)
  );
});

/* Function for dropdowns */
function openDropdown(event, dropdownID) {
  let element = event.target;
  while (element.nodeName !== "A") {
    element = element.parentNode;
  }

  createPopper(element, document.getElementById(dropdownID), {
    placement: "bottom-start",
  });

  document.getElementById(dropdownID).classList.toggle("hidden");
  document.getElementById(dropdownID).classList.toggle("block");
}
