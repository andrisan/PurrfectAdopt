<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purrfect Adopt</title>

    <!-- icon pack -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    @vite(['resources/css/admin.css','resources/css/app.css', 'resources/js/app.js'])

    <style>

        /* Tambahkan CSS responsif berdasarkan ukuran layar */
        @media (max-width: 768px) {
        .col-md-4 {
            flex-basis: 100%;
            margin-bottom: 20px;
        }
        }



        /* Tambahkan CSS responsif berdasarkan ukuran layar */
        @media (max-width: 768px) {
        .col-md-4 {
            flex-basis: 100%;
            margin-bottom: 20px;
        }
        }
    </style>
</head>
<body>
    @include('components.header-admin');
      <!-- SDSS -->
    <div class="container my-16">

         <div style="margin-left: 90px; margin-top: 25px" class="flex">
          <h4 class="font-bold p-1"><b>Data kucing yang terdaftar</b></p>
        </div>

        <div class="table-wrapper shadow rounded">
            <table class="tbluser text-sm" id="tblkucing">
                <thead>
                <tr>
                <td><b>No</b></td>
                <td><b>ID</b></td>
                <td><b>Nama</b></td>
                <td><b>Warna</b></td>
                <td><b>Ras</b></td>
                <td><b>Gender</b></td>
                <td><b>Berat Badan</b></td>
                <td><b>Tinggi Badan</b</td>
                <td><b>Status</b></td>
                <td><b>Aksi</b></td>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>

    @include('components.footer')



  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script type="text/javascript">
    $(function () {
        let isi = '';

        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('kucing')
        //     }
        // });

        function getKucing() {
            const url = 'http://127.0.0.1:8000/getadminkucing';

            $.ajax({
                type:"GET",
                url:url,
                dataType:"JSON",
                success:
                function (response) {
                            isi = '';
                            let no_urut = 1 ;
                            response.forEach(el => {
                                isi += `
                                    <tr>
                                        <td>${no_urut}</td>
                                        <td class="nr" opacity="0">${el.id}</td>
                                        <td> ${el.nama} </td>
                                        <td>${el.warna}</td>
                                        <td> ${el.ras} </td>
                                        <td> ${el.gender ? 'Laki-laki' : 'Perempuan'} </td>
                                        <td>${el.berat_badan}</td>
                                        <td> ${el.tinggi_badan}</td>
                                        <td>${el.status ? '<span class="bg-green-300 text-green-900 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Teradopsi</span>' : '<span class="bg-yellow-100 text-white-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">Belum Teradopsi</span>'}</td>
                                        <td class="image-cell">
                                            <button id=" buttondelete"  class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-1 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" style="cursor:pointer">Delete</button>
                                            <button id="buttonview"  class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-1 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" style="cursor:pointer">View</button>
                                            <button id="buttonapprove"  class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-1 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" style="cursor:pointer">Approve</button>
                                        </td>
                                    </tr>
                                `;
                                no_urut += 1;
                            });
                             $('#tblkucing').append(isi);
                        }
            });
        }

        $('#tblkucing').on('click', '#btndelete', function (e) {
            var $id = $(this).closest("tr")   // Finds the closest row <tr>
            .find(".nr")     // Gets a descendent with class="nr"
            .text();         // Retrieves the text within <td>

            let url = 'http://127.0.0.1:8000/hapuskucing/' + $.trim($id);        // Outputs the answer

            $.ajax({
                type: "GET",
                url: url,
                success: function (response) {
                    // $('#tblanggota').find("tr:gt(0)").remove();
                    // getanggota()
                }
            });
            swal("Sukses!", "Data berhasil dihapus", "success");
            $(this).closest('tr').remove();
        });

        getKucing();
    })
  </script>

</body>
</html>
