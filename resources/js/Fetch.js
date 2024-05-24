// Handle Fetch slug
const slug = document.querySelector("#Slug");
if (slug) {
    const title = document.querySelector("#Title");

    title.addEventListener("change", function (event) {
        fetch("/dashboard/checkSlug?title=" + title.value)
            .then((response) => {
                if (!response.ok) {
                    throw new Error(
                        "Network response was not Ok " + response.statusText
                    );
                }
                return response.json();
            })
            .then((data) => {
                // console.log(data);
                slug.value = data.slug;
            })
            .catch((error) => {
                console.error(
                    "There was a problem with the fetch operation : ",
                    error
                );
            });
    });
}
