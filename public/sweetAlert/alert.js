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
if(flashData){
  Swal.fire({
    title: 'Data Produk',
    text: 'Berhasil' + flashData,
    type: 'success'
  })
}
$(document).on('click', '.btn-hapus',function(e){
  e.preventDefault();
  const href = $(this).attr('href');
  Swal.fire({
    title: 'Yakin untuk Menghapus produk ini?',
    text: "Data yang terhapus tidak dapat dikembalikan!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Ya, Hapus!'
  }).then((result) => {
    if (result.value) {
        document.location.href=href;
      
    }
  })
})

