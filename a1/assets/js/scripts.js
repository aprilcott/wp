const forms = document.querySelectorAll('.needs-validation')
const file = document.getElementById('formFile')
  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
    event.preventDefault()
    event.stopPropagation()
    if (!file.contains(".png")) {
      alert("bruh")
    }
  })
})
