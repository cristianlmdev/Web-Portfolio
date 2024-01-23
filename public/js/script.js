(() => {
    document.addEventListener("DOMContentLoaded", (event) => {

        window.scroll_to_element = function(element_class, event) {
            event.preventDefault();
            let element = document.querySelector(element_class);


            if (element) {
                element.scrollIntoView({ behavior: "smooth"});
            }
        };

        const button = document.querySelector('.button-menu');
        const menu = document.querySelector('#menu');

        let press = false;
        button.addEventListener('click', (e) => {
            e.preventDefault();
            if (!press) {
                menu.style = 'height:260px;';
                press = true;
            } else {
                menu.style = 'height:0;';
                press = false;
            }
        });

    });
})();
