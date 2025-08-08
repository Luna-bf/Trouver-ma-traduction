// Slider
new Swiper('.card-wrapper', {
    loop: true,
    spaceBetween: 40,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true,
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // Responsive
    breakpoints: {
        0: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 4
        },
    }
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