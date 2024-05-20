// Handle Fetch slug
const slug = document.querySelector("#Slug");
if (slug) {
    slug.addEventListener("change", (e) => {
        console.log(e.target.value);
    });
}
