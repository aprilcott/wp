const forms = document.querySelectorAll('.needs-validation')
const forms_user = document.querySelectorAll('.needs-validation-user')

const file = document.getElementById('formFile')
  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', 
    function(event) {
      const submitError = document.getElementById('submit-alert');
      submitError.innerHTML = '';
      submitError.style.display = 'none';
      if (!checkExtension(file)) {
        event.preventDefault();
        submitError.innerHTML = 'Only image files are allowed (JPG, JPEG, PNG, GIF, WEBP)';
        submitError.style.display = 'block';
        return false;
      }
      // If valid, form will submit normally
    });
  });
  Array.from(forms_user).forEach(form => {
    form.addEventListener('submit', 
    function(event) {
      const email = document.getElementById('email');
      const submitError = document.getElementById('submit-alert');
      submitError.innerHTML = '';
      submitError.style.display = 'none';
      if (!isEmail(email)) {
        event.preventDefault();

        submitError.innerHTML = 'Input must be a valid email address (contains @ and .)';
        submitError.style.display = 'block';
        return false;
      }
      // If valid, form will submit normally
    });
  });
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
function isEmail(input) {
  if (input.value.includes('@') && input.value.includes('.')) {
    return true;
  } else {
    return false;
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
function showError(errorString) {
  const submitError = document.getElementById('submit-alert');
  submitError.innerHTML = errorString;
  submitError.style.display = 'block';
}
function refillBio(bioInfo) {
  const bioField = document.getElementById('registerBio');
  bioField.value = bioInfo;
}
function refillName(nameInfo) {
  const nameField = document.getElementById('name');
  nameField.value = nameInfo;
}
function refillEmail(emailInfo) {
  const emailField = document.getElementById('email');
  emailField.value = emailInfo;
}
function errorRegister(errorString, bioInfo) {
  showError(errorString);
  refillBio(bioInfo);
}
function errorRegisterPass(errorString, bioInfo, nameInfo, emailInfo) {
  showError(errorString);
  refillBio(bioInfo);
  refillName(nameInfo);
  refillEmail(emailInfo);
}
function errorRegisterEmail(errorString, bioInfo, nameInfo) {
  showError(errorString);
  refillBio(bioInfo);
  refillName(nameInfo);
}
const categorySelect = document.getElementById("gallery-filter");
      categorySelect.addEventListener("change", function() {
        const selectedValue = this.value;
        const hide = document.getElementsByClassName('col-md-3');
        const show = document.getElementsByClassName(selectedValue)
        for (i = 0; i < hide.length; i++) {
        hide[i].style.display = 'none'
        }
        for (i = 0; i < show.length; i++) {
          show[i].style.display = 'block'
          console.log(show[i])
        }
      });