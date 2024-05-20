document.addEventListener("DOMContentLoaded", function () {
    // Handle Button file upload
    const fileInput = document.getElementById("jsfile_upload");
    if (fileInput) {
        const fileNameSpan = document.getElementById("jsfile-name");

        fileInput.addEventListener("change", function (event) {
            const fileName = event.target.files[0]
                ? event.target.files[0].name
                : "No File Selected";
            fileNameSpan.textContent = fileName;
        });
    }
});
