
<script type="text/javascript">
            $('.dataTable').DataTable({
                responsive: true, 
                buttons :[
                    'excel','copy','pdf'
                ],
                dom: "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-6'Bi><'col-sm-6'p>>",
                lengthMenu: [[10, 25 , 50 , -1 ], [ 10 , 25 , 50 , "All"]],
                language : {
                    "processing" : "sedang memproses...",
                    "lengthMenu" : "Tampilkan _MENU_ Baris",
                    "zeroRecords" : "Tidak di temukan data yang sesuai",
                    "info" : "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                    "infoEmpty" : "Menampilkan 0 dari 0 dari 0 entri",
                    "infoFiltered" : "(disaring dari _MAX_ entri keseluruhan)",
                    "infoPostFix" : "",
                    "search" : "Cari:",
                    "url" : "",
                    "paginate" :{
                        "first": "&laquo;",
                        "previous": "&lsaquo;",
                        "next": "&rsaquo;",
                        "last": "&raquo;",
                        
                    }
                            
                }
            });
            $(document).on('click', '.del', function(){
                var href = $(this).attr('rel');
                swal({
                    title:"Anda yakin?",
                    text: "Data yang telah di hapus tidak dapat di kembalikan!",
                    type: "warning",
                    showCancelButton: true,
                    cancelButtonText: "Batalkan",
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Ya, saya yakin!",
                    closeOnConfirm: false   
                },
                function (){
                    swal({
                        title: "Terhapus!",
                        text: "data yang anda maksud telah berhasil terhapus",
                        type: "success"
                    },
                    function(){
                        window.location = href;
                    });
                    
                });
                
                return false;
            });
        </script>
</body>
</html>