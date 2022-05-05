(function(){
    // console.log("vive la boite modale");
    let boite__modale = document.querySelector(".boite__modale");
    let boite__modale__texte = document.querySelector(".boite__modale__texte");
    let cours__desc__ouvrir = document.querySelectorAll('.cours__desc__ouvrir');
    let boite__modale__fermeture = document.querySelector('.boite__modale__fermeture');
    // console.log(cours__desc__ouvrir.length);
    for (const bout of cours__desc__ouvrir) {
        console.log(bout.tagName);
        bout.addEventListener('mousedown', function(){
            // console.log(this.parentNode.parentNode.className);
            // console.log(this.parentNode.parentNode.children[0].innerHTML);
            boite__modale.classList.add('ouvrir');
            boite__modale__texte.innerHTML = this.parentNode.parentNode.children[0].innerHTML;
        })
    }
    boite__modale__fermeture.addEventListener('mousedown', function(){
        boite__modale.classList.remove('ouvrir'); 
    })
})()