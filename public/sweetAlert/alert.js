// const flashData = $(document).on('.flash-data').data('flashdata');
// if(flashData=="usernameNotFound"){
//   Swal.fire({
//     icon: 'error',
//     title: 'Username Not Found!',
//   })
// }else if(flashData=="wrongPassword"){
//   Swal.fire({
//     icon: 'error',
//     title: 'Wrong Password!',
//   })
// }else if(flashData=="userRegistered"){
//   Swal.fire({
//     icon: 'success',
//     title: 'User Registered!',
//   })
// }else if(flashData=="userNotRegistered"){
//   Swal.fire({
//     icon: 'error',
//     title: 'User Not Registered!',
//     text: '',
//   })
// }
// if(flashData){
//   Swal.fire({
//     title: 'Data Produk',
//     text: 'Berhasil' + flashData,
//     type: 'success'
//   })
// }
function deleteProduct(id){
  Swal.fire({
    title: 'Are you sure to delete this product?',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes'
  }).then((result) => {
    if (result.value) {
        document.location.href='/product/delete/'+id;
    }
  })
}

function deleteAccount(id){
  Swal.fire({
    title: 'Are you sure to delete this account?',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes'
  }).then((result) => {
    if (result.isConfirmed) {
      document.location.href='/admin/manage/accounts/delete/'+id;
    }
  })
}
