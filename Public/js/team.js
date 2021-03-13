    window.addEventListener("load", (event) => {
    var swiperWrapper = document.querySelector(".swiper-wrapper");

    /* El equipo */
    var team = [
      {
        name: "Kathia Berrios",
        role: "Jefa de proyecto",
        desc:
          "El jefe de proyectos es la persona encargada de planificar, ejecutar y monitorizar las acciones que forman parte de un proceso.",
        photo: "../media/kathia.jpeg",
        website: "https://kathiaberrios.com/",
        email: "mailto:rafaelavlucas@gmail.com",
        linkedin: "https://www.linkedin.com/in/rafaelalucas/",
      },
      {
        name: "Tania Bonilla",
        role: "Diseñador UI/UX",
        desc:
          "Logramos una buena UX al enfocarnos en diseñar productos útiles, usables y deseables, lo cual influye en que el usuario se sienta satisfecho, feliz y encantado.",
        photo: "../media/Tania.jpeg",
        website: "https://rafaelalucas.com",
        email: "mailto:rafaelavlucas@gmail.com",
        linkedin: "https://www.linkedin.com/in/rafaelalucas/",
      },
      {
        name: "Kevin Parada",
        role: "Desarrollador Back-End",
        desc:
          "Se encarga de diseñar la lógica y las soluciones para que todas las acciones solicitadas en una página web sean ejecutadas de manera correcta. ",
        photo: "../media/kevin.jpg",
        website: "https://kevinparada99.github.io/Portafolio/Index.html",
        email: "mailto:rafaelavlucas@gmail.com",
        linkedin: "https://www.linkedin.com/in/rafaelalucas/",
      },
      {
        name: "Freddy Castro",
        role: "Desarrollador Front-End",
        desc:
          "se encarga de programar el código para hacer que la interfaz sea atractiva, intuitiva y que la experiencia de usuario (navegación) sea agradable para su público objetivo.",
        photo: "../media/Freddy.jpeg",
        website: "https://portafolio-freddy-en.netlify.app",
        email: "mailto:rafaelavlucas@gmail.com",
        linkedin: "https://www.linkedin.com/in/freddy-castro-rs/",
      },
      {
        name: "Josselin Maravilla",
        role: "Líder de equipo",
        desc:
          "Gestionar proyectos alineados con la estrategia de la empresa sino también saber organizar, planificar, controlar, gestionar y desarrollar equipos humanos.",
        photo: "../media/Josselin.jpeg",
        website: "https://rafaelalucas.com",
        email: "mailto:rafaelavlucas@gmail.com",
        linkedin: "https://www.linkedin.com/in/rafaelalucas/",
      },

      {
        name: "Cristina Rivera",
        role: "Líder de documentación",
        desc:
          "El objetivo central de la gestión documental, es el garantizar el completo control, organización y clasificación de los documentos, todo por medio de un seguimiento y análisis constante.",
        photo: "../media/Fabiola.jpeg",
        website: "https://cristinariverav.wordpress.com/",
        email: "mailto:rafaelavlucas@gmail.com",
        linkedin: "https://www.linkedin.com/in/cristina-rivera-4516ab204/",
      },
    ];

    /* Llamado de iconos */
    var icons = [
        {
        iWebsite: "https://rafaelalucas.com/dailyui/6/assets/link.svg",
        iEmail: "https://rafaelalucas.com/dailyui/6/assets/email.svg",
        iLinkedin: "https://rafaelalucas.com/dailyui/6/assets/linkedin.svg",
        },
    ];

    var iWebsite = icons[0].iWebsite,
        iEmail = icons[0].iEmail,
        iLinkedin = icons[0].iLinkedin;

    /* Function para declarar el script del equipo */
    function addTeam() {
        for (let i = 0; i < team.length; i++) {
        /* Variables for the team */
        var name = team[i].name,
            role = team[i].role,
            desc = team[i].desc,
            photo = team[i].photo,
            website = team[i].website,
            email = team[i].email,
            linkedin = team[i].linkedin;

        /* Template Cards del equipo */
        var template = `
                    <div class="swiper-slide">
                    <div class="card">
                        <span class="bg"></span>
                        <span class="more"></span>
                        <figure class="photo"><img src="${photo}"></figure>
                            <article class="text">
                                <p class="name">${name}</p>
                                <p class="role">${role}</p> 
                                <p class="desc">${desc}</p> 
                            </article>
                            
                            <div class="social">
                            <span class="pointer"></span>
                            <div class="icons">
                                <a class="icon" href="${website}" target="_blank" data-index="0"><img src="${iWebsite}"></a>
                                <a class="icon" href="${email}" target="_blank" data-index="1"><img src="${iEmail}"></a>
                                <a class="icon" href="${linkedin}" target="_blank" data-index="2"><img src="${iLinkedin}"></a>
                                </div>
                                </div>
                        </div>
                    </div>`;

        swiperWrapper.insertAdjacentHTML("beforeend", template);
        }
    }

    addTeam();

    /*Optiones Swiper */

    var mySwiper = new Swiper(".swiper-container", {
        // Optional parametros
        direction: "horizontal",
        loop: true,
        centeredSlides: false,
        speed: 800,
        slidesPerView: 3,
        spaceBetween: 40,
        threshold: 5,

        // If we need pagination
        pagination: {
        el: ".swiper-pagination",
        clickable: true,
        },

        // Navigation arrows
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        },
        breakpoints: {
        1180: {
            slidesPerView: 2,
            spaceBetween: 40,
            centeredSlides: false,
        },
        799: {
            slidesPerView: 1,
            spaceBetween: 20,
            centeredSlides: true,
            loop: true,
        },
        },
    });

    /* Show More */

    var btnShow = document.querySelectorAll(".more");

    btnShow.forEach(function (el) {
        el.addEventListener("click", showMore);
    });

    function showMore(event) {
        var card = event.target.closest(".swiper-slide");

        if (card.classList.contains("show-more")) {
        card.classList.remove("show-more");
        } else {
        card.classList.add("show-more");
        }
    }

    /* Social Hover */
    var icon = document.querySelectorAll(".icon");

    icon.forEach(function (el) {
        el.addEventListener("mouseenter", followCursor);
    });

    function followCursor(event) {
        var pointer = event.currentTarget
            .closest(".swiper-slide")
            .querySelector(".pointer"),
        index = event.currentTarget.dataset.index,
        sizeIcon = 60 * index + 25;

        pointer.style.transform = `translateX(${sizeIcon}px)`;
    }

    /* end */
    });
