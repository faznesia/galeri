document.addEventListener("DOMContentLoaded", function() {
    const gallery = document.getElementById("gallery");

    fetch("load_images.php")
        .then(response => response.json())
        .then(images => {
            images.forEach(image => {
                const img = document.createElement("img");
                img.src = `uploads/${image}`;
                img.alt = image;
                img.style.maxWidth = "100px";
                img.style.margin = "10px";
                gallery.appendChild(img);
            });
        });
});
