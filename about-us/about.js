function removePreloader(){
    let preloader = document.querySelector('.preloader');
    let time = 1500; // milliseconds

    preloader.style.animation = "fadeOut 1.4s ease-out";

    let int = setInterval(function(){
        if (preloader) {
            preloader.style.display = 'none';
            document.title = "About Us | JWL Youth Ministry Kenya Chapter";
            clearInterval(int);
        }
    }, time);
}


function setCopyrightYear(){
    const yearComp = document.querySelector('.year')
    const now = new Date()

    const year = now.getFullYear();

    yearComp.textContent = year;
}

setCopyrightYear();


function hideHamMenu(){
    const link = document.querySelector(".links");
    const closeBtn = document.querySelector(".ham-close");

    link.style.display = "none"
    closeBtn.style.display = "none"
}


function showHamMenu(){
    const link = document.querySelector(".links");
    const closeBtn = document.querySelector(".ham-close");

    link.style.display = "flex"
    closeBtn.style.display = "flex"
    link.style = "animation: slideIn 200ms linear;"
}
