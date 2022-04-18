const counters = document.querySelectorAll(".counter");
const speed = 380;

counters.forEach(counter => {
  const updCount = () => {
    const target = counter.getAttribute("data-target");
    const count = +counter.innerText;

    const score = target / speed;

    if (count < target) {
      counter.innerText = Math.ceil(count + score);
      setTimeout(updCount, 1)
    } else {
      counter.innerText = target;
    }
  }
  updCount();
})