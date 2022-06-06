var share = document.querySelector("#share-button");
var url = window.location.href;
var title = document.title;

share.addEventListener("click", async (e) => {
    e.preventDefault();
    if (navigator.share) {
       await  navigator
            .share({
                title: title,
                url: url,
            })
            .then((result) => {
                window.addEventListener("unmarked", () => {
                    Swal.fire({
                        icon: "success",
                        position: "bottom-end",
                        title: "Thanks for sharing!",
                        showConfirmButton: true,
                        timer: 1300,
                    });
                });
       console.log('share !!' , result)
            })
            .catch(console.error);
    } else {
       console.log('Could not share')
    }
});
window.addEventListener("unmarked", () => {
    Swal.fire({
        icon: "info",
        position: "top-end",
        title: "Unmarked wall",
        showConfirmButton: false,
        timer: 1300,
    });
});

window.addEventListener("marked", () => {
    Swal.fire({
        icon: "success",
        position: "top-end",
        title: "Marked wall",
        showConfirmButton: false,
        timer: 1300,
    });
});
