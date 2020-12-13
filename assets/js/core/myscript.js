// SweetAlert Script
const flashdata = $('.flash-data').data('flashdata');
if(flashdata){
   Swal.fire({
      title: 'Data',
      text: 'Berhasil ' + flashdata,
      icon: 'success'
   });
}

$('.tombol-hapus').on('click', function(e){
   e.preventDefault();
   const href = $(this).attr('href');

   Swal.fire({
     title: 'Anda Yakin?',
     text: "Data Akan di Hapus!",
     icon: 'warning',
     showCancelButton: true,
     confirmButtonColor: '#3085d6',
     cancelButtonColor: '#d33',
     confirmButtonText: 'Hapus Data!'
   }).then((result) => {
     if (result.value) {
       document.location.href = href;
     }
   })
})

const pesandata = $('#pesandata').data('pesandata');
if(pesandata){
  Swal.fire({
    title: 'Ups..',
    text: pesandata + '!',
    icon: 'warning'
  });
}

const berhasil = $('#pesanberhasil').data('pesanberhasil');
if(berhasil){
  Swal.fire({
    title: 'Berhasil',
    text: 'Selamat ' + berhasil,
    icon: 'success'
  });
}

// End of Sweet Alert Script

$('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
});

