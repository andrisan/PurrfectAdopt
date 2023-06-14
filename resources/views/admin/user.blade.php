<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Admin</title>

    <style>

      .text-white {
        --tw-text-opacity: 1;
        color: rgba(255, 255, 255, var(--tw-text-opacity));
      }

      .text-center {
        text-align: center;
      }

      .font-medium {
        font-weight: 500;
      }

      .grid {
        display: grid;
      }

      .p-5 {
        padding: 1.25rem;
      }

      .p-10 {
        padding: 2.5rem;
      }

      .px-10 {
        padding-left: 2.5rem;
        padding-right: 2.5rem;
      }
      .px-24 {
        padding-left: 6rem;
        padding-right: 6rem;
      }

      .py-3 {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
      }

      .place-items-center {
        place-items: center;
      }

      .yellow-bg {
        background-color: #FFF7D4;
      }

      .bg-light{
        background-color: #FFD95A;
      }

      .bg-primary {
        background-color: #C07F00;
      }

      .roundedd {
        border-radius: 1.5rem;
      }

      .shadow {
        --tw-shadow: 0 3px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
      }

    </style>
</head>
<body style="font-family: Poppins;" class="yellow-bg">

    <!--Table-->
    <div class="p-10"></div>
        <div class="grid p-10 place-items-center">
            <div class="p-5 bg-light rounded shadow">
                <table class="text-center text-white" id="tbluser">
                    <thead class="bg-primary rounded shadow">
                        <tr>
                            <th scope="col"
                            class="px-10 py-3 font-medium">
                            No
                            </th>
                            <th scope="col"
                            class="px-10 py-3 font-medium">
                            ID User
                            </th>
                            <th scope="col"
                            class="px-24 py-3 font-medium">
                            Name
                            </th>
                            <th scope="col"
                            class="px-24 py-3 font-medium">
                            Email
                            </th>
                            <th scope="col"
                            class="px-24 py-3 font-medium">
                            Jenis Kelamin
                            </th>
                            <th scope="col"
                            class="px-24 py-3 font-medium">
                            Status
                            </th>
                            <th scope="col"
                            class="px-24 py-3 font-medium">
                            Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
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
                                            <th>${no_urut}</th>
                                            <th class="nr" opacity="0">${el.id}</th>
                                            <th> ${el.name} </th>
                                            <th>${el.email}</th>
                                            <th> ${el.gender} </th>
                                            <th> ${el.status ? 'User' : 'Admin'}</th>
                                            <th>
                                            <button id="btndelete" class="btn btn-danger">Hapus</button></th>
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

            getUser();
        })
    </script>

</body>
</html>
