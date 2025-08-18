const forms = document.querySelectorAll('.needs-validation')
const file = document.getElementById('formFile')
  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
    event.preventDefault()
    event.stopPropagation()
    const submitError = document.getElementById('submit-alert');
    submitError.innerHTML = '';
    submitError.style.display = 'none';
    if (!checkExtension(file)) {
      submitError.innerHTML = 'Only image files are allowed (JPG, PNG, GIF, WEBP)';
      submitError.style.display = 'block';
    }
  })
})
function checkExtension(file) {
  if (file.value.endsWith('.png')) {
    return true;
  } else if (file.value.endsWith('.jpg')) {
    return true;
    } else if (file.value.endsWith('.jpeg')) {
    return true;
  } else if (file.value.endsWith('.webp')) {
    return true;
  } else if (file.value.endsWith('.gif')) {
    return true;
  }
}
document.addEventListener('DOMContentLoaded', Function())
  const galleryImages = document.querySelectorAll('.gallery-image')
  const modalImage = document.getElementById('modal-img')
  galleryImages.forEach(img => {
    img.addEventListener('click', function() {
      modalImage.src = this.src
      modalImage.alt = this.alt
    })
  })

