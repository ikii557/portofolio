document.addEventListener("DOMContentLoaded", function () {
    const hamburger = document.getElementById("hamburger");
    const menu = document.getElementById("navbar-menu");

    if (hamburger && menu) {
        hamburger.addEventListener("click", () => {
            menu.classList.toggle("active");
        });
    }
});
document.addEventListener("DOMContentLoaded", function () {
    const profileImage = document.querySelector("#profile-image img");
    const modal = document.getElementById("image-modal");
    const zoomedImage = document.getElementById("zoomed-image");
    const closeBtn = document.getElementById("close-modal");

    if (profileImage && modal && zoomedImage && closeBtn) {
        profileImage.addEventListener("mouseenter", () => {
            zoomedImage.src = profileImage.src;
            modal.style.display = "block";
        });

        closeBtn.addEventListener("click", () => {
            modal.style.display = "none";
        });

        modal.addEventListener("click", (e) => {
            if (e.target === modal) {
                modal.style.display = "none";
            }
        });
    }
});
