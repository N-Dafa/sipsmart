window.addEventListener("load", () => {
    const loader = document.querySelector(".loader");
    loader.classList.add("loader-hidden");
    loader.addEventListener("transitionend", () => {
        document.body.removeChild("loader");
    })
})


window.addEventListener("load", () => {
    const loader = document.querySelector(".load-icon");
    loader.classList.add("load-icon-hidden");
    loader.addEventListener("transitionend", () => {
        document.body.removeChild("load-icon");
    })
})