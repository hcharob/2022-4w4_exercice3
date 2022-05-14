 //L'élément HTML qui agira comme curseur
 let leCurseur = document.querySelector(".curseur");

 //Écouteur sur la fenêtre pour l'événement de souris "mousemove"
 window.addEventListener("mousemove", deplacerCurseur);


 /**
  * Fonction permettant de déplacer le curseur à l'endroit du
  * pointeur de la souris dans l'écran
  * 
  * @param {object} event Informations sur l'événement MouseEvent distribué
  */
 function deplacerCurseur(event) {
     //Coordonnées X et Y du pointeur de la souris
     //console.log("client X, Y : ", event.clientX, event.clientY);

     //Déplacer le curseur à l'endroit du pointeur de la souris
     leCurseur.style.transform = `translate(${event.clientX}px, ${event.clientY}px)`;
 }
