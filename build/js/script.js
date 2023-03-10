var app = document.querySelector(".typewriter");

var typewriter = new Typewriter(app, {
  loop: true,
  delay: 75,
});

typewriter
  .pauseFor(2500)
  .typeString("building websites")
  .pauseFor(1000)
  .deleteAll()
  .typeString("learning")
  .pauseFor(300)
  .start();

//About Tabs
let tabsList = document.querySelectorAll(".nav-tabs .nav-item a");

tabsList.forEach((triggerElement) => {
  const tabTrigger = new bootstrap.Tab(triggerElement);

  triggerElement.addEventListener("click", (event) => {
    event.preventDefault();
    tabTrigger.show();
  });
});
