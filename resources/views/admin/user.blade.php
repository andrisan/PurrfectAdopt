<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purrfect Adopt</title>

    <!--Icon Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    @vite(['resources/css/admin.css', 'resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('components.header-admin');

    <!--Table-->


    <div class="container my-16">

        <div style="margin-left: 90px; margin-top: 25px" class="flex">
          <h4 class="font-bold p-1"><b>Data user yang terdaftar</b></p>
        </div>

        <div class="table-wrapper shadow rounded">
            <table class="tbluser text-sm" id="tbluser">
                <thead class="shadow">
                  <tr>
                    <td><b>No</b></td>
                    <td><b>ID User</b></td>
                    <td><b>Name</b></td>
                    <td><b>Email</b></td>
                    <td><b>Jenis Kelamin</b></td>
                    <td><b>Kucing</b></td>
                    <td><b>Status</b></td>
                    <td><b>Aksi</b></td>
                  </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
  <!--End Table-->

  @include('components.footer')

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
        $(function () {
            let isi = '';

            // $.ajaxSetup({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('user')
            //     }
            // });

            function getUser() {
                const url = 'http://127.0.0.1:8000/getadminuser';

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
                                            <td> ${el.name} </td>
                                            <td>${el.email}</td>
                                            <td> ${el.gender ? 'Perempuan' : 'Laki-laki'} </td>
                                            <td>${el.status ? '<button id="btnlihat" class="focus:outline-none text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-1 mr-2 mb-2 dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-900" style="cursor:pointer" style="cursor:pointer">Lihat</button>' : 'Tidak memiliki kucing'}</td>
                                            <td> ${el.role}</td>
                                            <td>
                                                <button id="btndelete" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-1 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" style="cursor:pointer" style="cursor:pointer">Hapus</button>
                                            </td>
                                        </tr>
                                    `;
                                    no_urut += 1;
                                });
                                $('#tbluser').append(isi);
                            }
                });
            }

            $('#tbluser').on('click', '#btndelete', function (e) {
                var $id = $(this).closest("tr")   // Finds the closest row <tr>
                .find(".nr")     // Gets a descendent with class="nr"
                .text();         // Retrieves the text within <td>

                let url = 'http://127.0.0.1:8000/hapususer/' + $.trim($id);        // Outputs the answer

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

            $('#tbluser').on('click', '#btnlihat', function (e) {
                var $id = $(this).closest("tr")   // Finds the closest row <tr>
                .find(".nr")     // Gets a descendent with class="nr"
                .text();         // Retrieves the text within <td>

                let url = 'http://127.0.0.1:8000/getuserkucing/' + $.trim($id);        // Outputs the answer

                $.ajax({
                    type: "GET",
                    url: url,
                    success: function (response) {
                        // $('#tblanggota').find("tr:gt(0)").remove();
                        // getanggota()
                        console.log(url);
                        console.log($id);
                        window.location.href = '/admin-detailuser/'+ $.trim($id);  ;
                        // window.location.href = url;
                    }
                });
            });

            getUser();
        })
    </script>

</body>
</html>
