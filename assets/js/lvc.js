function getRandomVisitors() {
    const base = 15;
    const fluctuation = Math.floor(Math.random() * 10);
    return base + fluctuation;
}

document.addEventListener("DOMContentLoaded", function () {

    const counter = document.getElementById("lvc-counter");
    
    if (!counter) return;

    function updateCounter() {
        const visitors = getRandomVisitors();
        counter.innerHTML = `${visitors} people are viewing this page`;
    }

    updateCounter();

    setInterval(updateCounter, 5000);
});