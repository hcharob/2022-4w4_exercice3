(function(){
        //L'élément HTML qui agira comme curseur
        let leCurseur = document.querySelector(".curseur");
        window.addEventListener("mousemove", deplacerCurseur);

        /**
         * Fonction permettant de déplacer le curseur à l'endroit du
         * pointeur de la souris dans l'écran
         * 
         * @param {object} event Informations sur l'événement MouseEvent distribué
         */
        function deplacerCurseur(event) {
            leCurseur.style.transform = `translate(${event.clientX}px, ${event.clientY}px)`;
        }
})()