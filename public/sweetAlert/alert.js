const flashData = $('.flash-data').data('flashdata');
if(flashData=="usernameNotFound"){
  Swal.fire({
    icon: 'error',
    title: 'Username Not Found!',
  })
}else if(flashData=="wrongPassword"){
  Swal.fire({
    icon: 'error',
    title: 'Wrong Password!',
  })
}else if(flashData=="userRegistered"){
  Swal.fire({
    icon: 'success',
    title: 'User Registered!',
  })
}else if(flashData=="userNotRegistered"){
  Swal.fire({
    icon: 'error',
    title: 'User Not Registered!',
    text: '',
  })
}

// if(flashData=="Registrasi"){
//   Swal.fire(
//     'Good job!',
//     flashData,
//     'success'
//   )
// }else if(flashData=="Username Invalid" && flashData=="Password Invalid"){
//   Swal.fire({
//     icon: 'error',
//     title: 'Oops...',
//     text: flashData,
//   })
// }