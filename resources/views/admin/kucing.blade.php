<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Purrfect Adopt</title>

</head>
<body name="kucing">
  <div>
    <table id="tblkucing" border="1px solid black">
        <thead>
            <tr>
                <td>No</td>
                <td>ID</td>
                <td>Nama</td>
                <td>Warna</td>
                <td>Ras</td>
                <td>Gender</td>
                <td>Berat Badan</td>
                <td>Tinggi Badan</td>
                <td>Status</td>
                <td >Aksi</td>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script type="text/javascript">
    $(function () {
        let isi = '';

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('kucing')
            }
        });

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
                                        <td> ${el.gender} </td>
                                        <td>${el.berat_badan}</td>
                                        <td> ${el.tinggi_badan}</td>
                                        <td>${el.status}</td>
                                        <td>
                                        <button id="btndelete" class="btn btn-danger">Hapus</button></td>
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
