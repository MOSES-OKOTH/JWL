function removePreloader(){
    let preloader = document.querySelector('.preloader');
    let time = 1500; // milliseconds

    preloader.style.animation = "fadeOut 1.4s ease-out";

    let int = setInterval(function(){
        if (preloader) {
            preloader.style.display = 'none';
            document.title = "Home | JWL Youth Ministry Kenya Chapter";
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