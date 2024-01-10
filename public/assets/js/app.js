document.addEventListener("DOMContentLoaded", function () {
    const dropdowns = document.querySelectorAll(".lang");

    dropdowns.forEach(dropdown => {
    const select = dropdown.querySelector('.lang-btn');
    const menu = dropdown.querySelector('.lang-dropdown');
    const options = dropdown.querySelectorAll('.lang-dropdown p');
    const selected = dropdown.querySelector('.selected');

    select.addEventListener('click', () => {
        menu.classList.toggle('active');

        options.forEach(option => {
        option.addEventListener('click', () => {
            selected.innerHTML = option.innerHTML;
            // menu.classList.remove('active');
            removeHiddenClass()
        })
        })
    })
    })
});

document.addEventListener("DOMContentLoaded", function () {
    const menuButton = document.querySelector(".lines");
    const menu = document.querySelector(".menu");
    const menuLine = document.getElementsByClassName("line");

    menuButton.addEventListener("click", function () {
        menu.classList.toggle("active");
        for (let i = 0; i < menuLine.length; i++) {
            menuLine[i].classList.toggle("active");
        }
    });
});


document.addEventListener('DOMContentLoaded', function () {
    const filterButton = document.querySelector('.filter-mobile');
    const filterMenu = document.querySelector('.open-mobile');
    const filterLine = document.getElementsByClassName('filter-line')

    filterButton.addEventListener('click', function () {
        filterMenu.classList.toggle('active');
        filterButton.classList.toggle('active');
        for (let i = 0; i < filterLine.length; i++) {
            filterLine[i].classList.toggle('active');
        }
    });
});

$(document).ready(function(){
    $('.owl-categories').owlCarousel({
        loop: true,
        items: 3,
        lazyLoad: true,
        margin: 10,
        autoplay: false,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
                mouseDrag: true,
                autoplay: true
            },
            1000: {
                items: 5,
                mouseDrag: false,
            },
        },
    });
});

$(document).ready(function () {
    $(".owl-news").owlCarousel({
        loop: true,
        items: 3,
        lazyLoad: true,
        margin: 30,
        autoplay: true,
        autoplayTimeout: 5000,
        nav: true,
        navText: [
            "<i class='fa-solid fa-chevron-left'></i>",
            "<i class='fa-solid fa-chevron-right'></i>",
        ],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 3,
            },
        },
    });
    $('.owl-prev, .owl-next').attr({
        'data-aos': 'fade-up',
        'data-aos-delay': '0300'
      });
});

const counters = document.querySelectorAll(".achivement span");
const speed = 200;

const options = {
    threshold: 0.5, 
};

const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            startCounterAnimation(entry.target);
            observer.unobserve(entry.target);
        }
    });
}, options);

counters.forEach((counter) => {
    observer.observe(counter);
});

function startCounterAnimation(counter) {
    const target = parseInt(counter.textContent);
    let count = Math.max(parseInt(counter.innerText) - 200, 0);

    const updateCount = () => {
        if (count < target) {
            counter.innerText = ++count;
            setTimeout(updateCount, 1);
        } else {
            counter.innerText = target;
        }
    };

    updateCount();
}

function followClickOut() {
    const newDiv = document.createElement('div')
    newDiv.classList.add('hidden')
    newDiv.onclick = removeHiddenClass;
    document.body.appendChild(newDiv)
}

function removeHiddenClass() {
    const hiddenElement = document.querySelector('.hidden');
    const activeElement = document.querySelector('.lang-dropdown.active');
    hiddenElement.remove();
  if (activeElement) activeElement.classList.remove('active');
}