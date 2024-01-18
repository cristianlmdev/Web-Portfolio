(() => {
    document.addEventListener("DOMContentLoaded", (event) => {

        window.scroll_to_element = function(element_class, event) {
            event.preventDefault();
            let element = document.querySelector(element_class);


            if (element) {
                element.scrollIntoView({ behavior: "smooth"});
            }
        };

    });
})();
