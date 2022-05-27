(function() {
  const FORM_URL = window.location.origin + '/fractales/send.php';

  const form = document.getElementById('contact-form')
  const fileInput = document.querySelector('.file__input')
  const attachmentsPreview = document.querySelector('.attachments__preview')
  const filePreviewName = document.querySelector('.attachments__name')
  const fileRemoveBtn = document.querySelector('.attachments__remove')

  const formContainer = document.querySelector('.contact-form-sect__form')
  const successMessage = document.querySelector('.contact-form-sect__message[data-type="success"]')
  const errorMessage = document.querySelector('.contact-form-sect__message[data-type="error"]')
  const reloadBtn = document.querySelector('.contact-form-sect__message-btn')

  const responseHandlers = {
    'success': showSuccess,
    'error': showError,
  }

  let sendFile = true

  form.addEventListener('submit', e => {
    e.preventDefault()
    const data = new FormData(form)

    if (!sendFile) {
      if(data.has('file')) {
        data.delete('file');
      }
    }

    formContainer.classList.add('onload')

    fetch(FORM_URL, {
      method: 'POST',
      body: data
    })
    .then(res => res.json())
    .then(data => {
      console.log(data);
      if (responseHandlers[data.status]) {
        responseHandlers[data.status]()
      }
    })
    .catch(e => console.log(e))
    .finally(() => formContainer.classList.remove('onload'))
  })

  fileInput.addEventListener('change', e => {
    const file = e.target.files[0]

    if (file) {
      const fileName = file.name
      setAttachmentFileInfo(fileName)
      attachmentsPreview.classList.add('attached')
      sendFile = true
    }
  })

  fileRemoveBtn.addEventListener('click', e => {
    e.preventDefault()
    clearAttachmentFileInfo()
    attachmentsPreview.classList.remove('attached')
    sendFile = false
  })

  reloadBtn.addEventListener('click', () => {
    showForm()
    clearAttachmentFileInfo()
    sendFile = true
    attachmentsPreview.classList.remove('attached')
  })

  function setAttachmentFileInfo(name) {
    filePreviewName.textContent = name
    filePreviewName.title = name
  }

  function clearAttachmentFileInfo() {
    filePreviewName.textContent = ''
    filePreviewName.title = ''
  }

  function showForm() {
    successMessage.classList.add('hidden')
    errorMessage.classList.add('hidden')
    formContainer.classList.remove('hidden')
  }

  function showError() {
    successMessage.classList.add('hidden')
    formContainer.classList.add('hidden')
    errorMessage.classList.remove('hidden')
  }

  function showSuccess() {
    errorMessage.classList.add('hidden')
    formContainer.classList.add('hidden')
    successMessage.classList.remove('hidden')
  }
})();