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
            const url = 'http://127.0.0.1:8000/gethomekucing';

            $.ajax({
                type:"GET",
                url:url,
                dataType:"JSON",
                success:
                function (response) {
                            isi = '';
                                isi += `
                                    <p>${response}</p>
                                `;
                             $('#tblkucing').append(isi);
                        }
                        // tblkucing diganti ID Div
            });
        }

        getKucing();
    })
  </script>
