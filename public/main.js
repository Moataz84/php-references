const handleFocus = e => e.target.classList.add('entered')

const handleBlur = e => {
  e.target.classList.remove('entered')
  if (e.target.value === '') e.target.classList.add('error')
}

const handleChange = e => {
  const value = e.target.value
  if (value === '') e.target.classList.add('error')
  else e.target.classList.remove('error')
}

const post = async e => {
  e.preventDefault()

  const inputs = document.querySelectorAll('input')
  const textarea = document.querySelector('textarea')

  const name = inputs[0].value
  const email = inputs[1].value
  const message = textarea.value

  if (name === '') inputs[0].classList.add('error')
  if (email === '') inputs[1].classList.add('error')
  if (message === '') textarea.classList.add('error')

  if (name !== '' && email !== '' && message !== '') {
    await fetch('api/add-post.php', {
      method: 'POST',
      body: JSON.stringify({name, email, message}),
      headers: {
        'Content-Type': 'application/json'
      }
    })
    window.location.href = './'
  }
}