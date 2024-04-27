document.getElementById('deleteButton').addEventListener('click', function (event) {
  event.preventDefault(); // Mencegah form disubmit secara langsung

  // Tampilkan SweetAlert konfirmasi
  Swal.fire({
    title: 'Konfirmasi',
    text: "Apakah Anda yakin ingin menyimpan/submit data?",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Ya, simpan!',
    cancelButtonText: 'Batal'
  }).then((result) => {
    if (result.isConfirmed) {

      document.getElementById('myForm').submit();

    }
  });
});


document.getElementById('saveButton').addEventListener('click', function (event) {
  event.preventDefault(); // Mencegah form disubmit secara langsung

  // Tampilkan SweetAlert konfirmasi
  Swal.fire({
    title: 'Konfirmasi',
    text: "Apakah Anda yakin ingin menyimpan/submit data?",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Ya, simpan!',
    cancelButtonText: 'Batal'
  }).then((result) => {
    if (result.isConfirmed) {

      document.getElementById('myForm').submit();

    }
  });
});