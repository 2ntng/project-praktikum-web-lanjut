const flashData = $('.flash-data').data('flashdata');
if(flashData=="Registrasi"){
  Swal.fire(
    'Good job!',
    flashData,
    'success'
  )
}else if(flashData=="Username Invalid" && flashData=="Password Invalid"){
  Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: flashData,
  })
}