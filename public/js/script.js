(() => {
    document.addEventListener("DOMContentLoaded", (event) => {

        window.scroll_to_element = function(element_class) {
            let element = document.querySelector(element_class);

            console.log(element_class)

            if (element) {
                element.scrollIntoView({ behavior: 'smooth' });
            }
        };

    });
})();
