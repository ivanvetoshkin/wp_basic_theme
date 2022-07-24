const links = document.querySelectorAll('a');

document.addEventListener('DOMContentLoaded', () => {
  for (const link of links) {
    link.addEventListener("mouseover", function (event) {
      hoverIn(this, event);
    });
    link.addEventListener("mouseout", function (event) {
      hoverOut(this, event);
    });
  }
});

function hoverIn(hoveredLink, _event) {
  if ((hoveredLink.href != '') && (hoveredLink.href != '#')) {
    for (const link of links) {
      if (link.href == hoveredLink.href) {
        link.classList.add('hover');
      }
    }
  }
}


function hoverOut(hoveredLink, _event) {
  for (const link of links) {
    if (link.href == hoveredLink.href) {
      link.classList.remove('hover');
    }
  }
}