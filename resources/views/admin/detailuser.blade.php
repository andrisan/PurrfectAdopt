<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Purrfect Adopt</title>

  <!--Icon Awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/0.0.0-insiders.4a070ac/tailwind.min.css" integrity="sha512-vJu7D5BpjnNXVpLBrl9LKLvmXBNjiLwge8EOZ/YS9XwiChpfKLAlydwIZvoJaDE3LI/kr3goH0MzDzNbBgyoOQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  @vite(['resources/css/detailuser.css', 'resources/js/app.js'])
</head>

<body>
<div class="flex flex-col">
  <div class="flex  bg-gray-50 p-5">
  <a href="<?= url('/admin-user'); ?>" style="text-decoration: none;color:white;"><i class="fa-solid fa-arrow-left" style="color: #f7f7f8;"></i> Kembali</a>
</div>
  <div class="flex flex-row">
    <div class="flex flex-col space-y-5 justify-between min-h-screen w-100 mx-6 p-2 py-4 bg-gray-50">

      <div class="flex flex-col flex-auto">
        <div class="p-2">
          <div class="space-x-3" style="justify-content:center; align-content:center; text-align:center" >
            <h4 class="font-bold"><b>Profil User</b></h4>
          </div>
        </div>

        <div class="p-2" style="padding-left:40px">
           <img src="../../img/user.png" alt=">" height='90px' width='90px' style="justify-content:center; align-items:center">
        </div>

        <div id="user" style="justify-content:center; align-content:center;">

        </div>

        <div  id="iduser"  style="justify-content:center; align-content:center;">

        </div>

        <div id="email" style="justify-content:center; align-content:center;">

        </div>
        <div id="profesi" style="justify-content:center; align-content:center;">

        </div>
        <div id="kontak"  style="justify-content:center; align-content:center;">

        </div>

      </div>

      <div class="flex flex-col ">
      </div>
    </div>

    <div class="flex-auto ">
        <div class="flex flex-col">
            <div class="flex flex-row space-x-3">
            </div>
            </div>

                <div class=" flex items-center justify-between text-gray-600 text-3xl p-5"><b>Data Kucing</b></div>
            <!--Table-->
                <div class="grid  lg:grid-cols-1  md:grid-cols-1 p-4 gap-3">
                    <div class="table-wrapper shadow rounded">
                        <table id="tblkucing" class="tablekucing text-sm">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium  uppercase tracking-wider">
                                Nama
                                </th>
                                <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium  uppercase tracking-wider">
                                Warna
                                </th>
                                <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium  uppercase tracking-wider">
                                Ras
                                </th>
                                <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium  uppercase tracking-wider">
                                Jenis Kelamin
                                </th>
                                <th scope="col"
                                class="relative px-6 py-3 text-left text-xs font-medium  uppercase tracking-wider">
                                Berat
                                </th>
                                </th>
                                <th scope="col"
                                class="relative px-6 py-3 text-left text-xs font-medium  uppercase tracking-wider">
                                Tinggi
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
        $(function () {
            let name = '';
            let IDuser = '';
            let email = '';
            let profesi = '';
            let isi = '';
            let kontak = '';

            // $.ajaxSetup({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('user')
            //     }
            // });

            function getUser() {
                let id = `{{$idreturn}}`;
                const url = 'http://127.0.0.1:8000/getuserkucing/'+ id;

                $.ajax({
                    type:"GET",
                    url:url,
                    dataType:"JSON",
                    success:
                    function (response) {
                        console.log(response);
                                name += `
                                    <h4 class="font-regular">Nama : ${response[0].name}</h4>
                                `;
                                email += `
                                    <h4 class="font-regular">Email : ${response[0].email}</h4>
                                `;
                                profesi += `
                                    <h4 class="font-regular" >Profesi : ${response[0].profesi}</h4>
                                `;
                                kontak += `
                                    <h4 class="font-regular" >Kontak : 0${response[0].kontak}</h4>
                                `;
                                isi = '';
                                let no_urut = 1 ;
                                response.forEach(el => {
                                    isi += `
                                        <tr>
                                            <td scope="col" class="relative px-6 py-3 text-left text-xs font-medium  uppercase tracking-wider"
                                            > ${el.nama} </td>
                                            <td  scope="col" class="relative px-6 py-3 text-left text-xs font-medium  uppercase tracking-wider"
                                            >${el.warna}</td>
                                            <td  scope="col" class="relative px-6 py-3 text-left text-xs font-medium  uppercase tracking-wider"
                                            > ${el.ras} </td>
                                            <td  scope="col" class="relative px-6 py-3 text-left text-xs font-medium  uppercase tracking-wider"
                                            > ${el.gender ? 'Laki-laki' : 'Perempuan'} </td>
                                            <td  scope="col" class="relative px-6 py-3 text-left text-xs font-medium  uppercase tracking-wider"
                                            >${el.berat_badan}</td>
                                            <td  scope="col" class="relative px-6 py-3 text-left text-xs font-medium  uppercase tracking-wider"
                                            > ${el.tinggi_badan}</td>
                                        </tr>
                                    `;
                                });

                                $('#tblkucing').append(isi);
                                $('#email').append(email);
                                $('#profesi').append(profesi);
                                $('#user').append(name);
                                $('#kontak').append(kontak);
                            }
                });
            }

            getUser();
        })
    </script>
</body>

</html>
