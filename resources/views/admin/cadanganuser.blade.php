<script src="hthttps://code.jquery.com/jquery-3.6.1.min.js"></script>
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
                                        <th> ${el.nama} </th>
                                        <th>${el.email}</th>
                                        <th> ${el.data_kucing} </th>
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
