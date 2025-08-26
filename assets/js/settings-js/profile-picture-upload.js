const uploadFileElements = {
  inputFile: document.querySelector('.buttons #choose-file-button #choose'),
  filePreview: document.querySelector('.preview figure img'),
  previewName: document.querySelector('p .preview-name'),
  previewFormat: document.querySelector('p .preview-format'),
}


uploadFileElements.inputFile.addEventListener('change', function() {

  // .files sert à indiquer que l'élément inputFile renverra un fichier
  const fileObject = uploadFileElements.inputFile.files[0];

  console.log(fileObject); // Renvoie un objet FileList contenant toutes les infos du fichier : nom, date de modification, sa taille et son format
});