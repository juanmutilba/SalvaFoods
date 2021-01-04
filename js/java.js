document.addEventListener("DOMContentLoaded", function () {



    let slider_index = 0;



    function show_slide(index) {
        let slides = document.querySelectorAll('.item');

        let dots = document.querySelectorAll('.punto-nav');

        if (index >= slides.length) slider_index = 0;
        if (index < 0) { slider_index = slides.length - 1 };

        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].classList.remove("active_punto");
        }

        slides[slider_index].style.display = "block";

        dots[slider_index].classList.add('active_punto');

    }

    show_slide(slider_index);

    document.querySelector('#flecha-prev').addEventListener('click', () => {
        show_slide(--slider_index);
    })
    document.querySelector('#flecha-next').addEventListener('click', () => {
        show_slide(++slider_index);
    })
    
    document.querySelectorAll('.punto-nav').forEach((element) => {
        element.addEventListener('click', function () {
  
            var dots = Array.prototype.slice.call(this.parentElement.children),
                dot_index = dots.indexOf(element);
            show_slide(slider_index = dot_index);
        })
    });

    setInterval(() => {
        show_slide(++slider_index)
    }, 4000);

})







