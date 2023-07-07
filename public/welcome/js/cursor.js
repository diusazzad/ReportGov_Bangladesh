const cursor = document.querySelector('.cursor');
const container = document.querySelector('.container');

// Mousemove event
container.addEventListener('mousemove', (e) => {
  cursor.style.top = `${e.pageY}px`;
  cursor.style.left = `${e.pageX}px`;
});

// Mouseout event
container.addEventListener('mouseout', () => {
  cursor.style.opacity = 0;
});

// Mouse stopped event
let timeout;
container.addEventListener('mousemove', () => {
  clearTimeout(timeout);
  cursor.style.opacity = 1;

  timeout = setTimeout(() => {
    cursor.style.opacity = 0;
  }, 2000);
});
