/***SLIDER***/

// M'expliquer en commentaire ce que fait ce bout de code !!
$(document).ready(function() {
  $('.slider').slick({
    autoplay: false,
    arrows: true,
    // prevArrow: '<button class="fa-solid fa-chevron-left"></button>',
    // nextArrow: '<button class="fa-solid fa-chevron-right"></button>',
    slidesToShow: 2, //Mon slider va montrer deux cartes sur chaque slide
    slidesToScroll: 1, //Les slides vont se tourner un par un, si je déclare '3' alors je vais passer 3 slides d'un coup lorsque je cliquerai sur 'next'
  });
});

$('.song-infos').slick({
  variableWidth: true,
});

$('.slick-container').slick({
  variableWidth: true,
});



/***TRANSLATIONS UPLOAD***/
/*const uploadFileElements = {
  inputFile: document.querySelector('.buttons #choose-file-button #choose'),
  filePreview: document.querySelector('.preview figure img'),
  previewName: document.querySelector('p .preview-name'),
  previewFormat: document.querySelector('p .preview-format'),
}


uploadFileElements.inputFile.addEventListener('change', function() {

  // .files sert à indiquer que l'élément inputFile renverra un fichier
  const fileObject = uploadFileElements.inputFile.files[0];

  console.log(fileObject); // Renvoie un objet FileList contenant toutes les infos du fichier : nom, date de modification, sa taille et son format
});*/



/***THEME SWITCHER***/
//Je déclare mes fonctions enableDarkMode et disableDarkMode
// const enableDarkMode = () => {
    
//      document.body.classList.add("dark-mode");
//      window.localStorage.setItem("dark-mode", "active"); //Je ne peux mettre que des strings dans le localStorage, au lieu de mettre isActive (true ou false) je met juste 'active'
// };

// const disableDarkMode = () => {
    
//      document.body.classList.remove("dark-mode");
//      window.localStorage.setItem("dark-mode", null);
// };

// //Puis je met un event listener sur le bouton, ce qui va me permettre de changer de thème
// elements.changeTheme.addEventListener("click", () => {
    
//      elements.darkMode = window.localStorage.getItem("dark-mode");
//      elements.darkMode !== "active" ? enableDarkMode() : disableDarkMode();
    
// //     //C'est l'équivalent de :
// //     /*
// //     if(darkMode !== "isActive") {
// //         enableDarkMode();
// //     } else {
// //         disableDarkMode();
// //     }
// //     */
// });