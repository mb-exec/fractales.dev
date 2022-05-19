(function() {
  const form = document.getElementById('contact-form')
  const fileInput = document.querySelector('.file__input')
  const attachmentsPreview = document.querySelector('.attachments__preview')
  const filePreviewName = document.querySelector('.attachments__name')
  const fileRemoveBtn = document.querySelector('.attachments__remove')

  form.addEventListener('submit', e => {
    e.preventDefault()


  })

  fileInput.addEventListener('change', e => {
    const file = e.target.files[0]

    if (file) {
      const fileName = file.name
      setAttachmentFileInfo(fileName)
      attachmentsPreview.classList.add('attached')
    }
  })

  fileRemoveBtn.addEventListener('click', e => {
    e.preventDefault()
    clearAttachmentFileInfo()
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
})();