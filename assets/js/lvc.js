function getRandomVisitors() {
    return Math.floor(Math.random() * 25) + 5;
}

document.addEventListener("DOMContentLoaded", function () {

    const counter = document.getElementById("lvc-counter");

    function updateCounter() {
        const visitors = getRandomVisitors();
        counter.innerHTML = `${visitors} people are viewing this page`;
    }

    updateCounter();

    setInterval(updateCounter, 5000);
});