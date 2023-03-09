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
