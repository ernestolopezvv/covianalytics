const navSlide = ()=>{
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li')

    // Toggle responsive menu
    burger.addEventListener('click', ()=>{
        nav.classList.toggle('nav-active')

    // Animate responsive menu
        navLinks.forEach((link, index) =>{
            if(link.style.animation){
                link.style.animation = ''
            } else{
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.4}s`;
            }
        });
        // Animate responsive menu icon
        burger.classList.toggle('toggle');
    });

}

navSlide();

