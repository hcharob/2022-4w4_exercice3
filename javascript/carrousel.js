(function () {
    console.log("vive la boite carrousel");
    let boite__carrousel = document.querySelector(".boite__carrousel");
    let boite__carrousel__navigation = document.querySelector(".boite__carrousel__navigation");
    let galerie__img = document.querySelectorAll('.galerie img');
    let boite__carrousel__fermeture = document.querySelector('.boite__carrousel__fermeture');
    console.log(galerie__img.length);

    let elmImg = document.createElement('img');
    boite__carrousel.append(elmImg);

    for (const img of galerie__img) {
        let bouton = document.createElement('button');
        boite__carrousel__navigation.append(bouton);
        console.log(img.tagName);
        img.addEventListener('mousedown', function () {

            console.log(this.getAttribute('src'));
            boite__carrousel.classList.add('ouvrir');
            console.log(boite__carrousel.classList);
            elmImg.setAttribute('src', this.getAttribute('src'))
        })
    }
    
    boite__carrousel__fermeture.addEventListener('mousedown', function () {
        boite__carrousel.classList.remove('ouvrir');
    })

})()