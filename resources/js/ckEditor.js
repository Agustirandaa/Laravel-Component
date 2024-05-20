import ClassicEditor from "@ckeditor/ckeditor5-build-classic";

document.addEventListener("DOMContentLoaded", () => {
    const editors = document.querySelectorAll(".ckeditor");
    editors.forEach((editor) => {
        ClassicEditor.create(editor, {
            mediaEmbed: {
                previewsInData: true,
            },
            // ckfinder: {
            //     uploadUrl:
            //         "http://appwebblog.test:8080/ckeditor/upload/image?_token=" +
            //         document
            //             .querySelector('meta[name="csrf-token"]')
            //             .getAttribute("content"),
            // },
        }).catch((error) => {
            console.error(error);
        });
    });
});
