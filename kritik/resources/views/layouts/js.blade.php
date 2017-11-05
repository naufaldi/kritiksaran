<!-- jQuery -->
<script src="{{url('admins/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{url('admins/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('admins/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{url('admins/vendors/nprogress/nprogress.js')}}"></script>
<!-- Chart.js -->
<script src="{{url('admins/vendors/Chart.js/dist/Chart.min.js')}}"></script>
<!-- gauge.js -->
<script src="{{url('admins/vendors/gauge.js/dist/gauge.min.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{url('admins/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src="{{url('admins/vendors/iCheck/icheck.min.js')}}"></script>
<!-- Skycons -->
<script src="{{url('admins/vendors/skycons/skycons.js')}}"></script>
<!-- Flot -->
<script src="{{url('admins/vendors/Flot/jquery.flot.js')}}"></script>
<script src="{{url('admins/vendors/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{url('admins/vendors/Flot/jquery.flot.time.js')}}"></script>
<script src="{{url('admins/vendors/Flot/jquery.flot.stack.js')}}"></script>
<script src="{{url('admins/vendors/Flot/jquery.flot.resize.js')}}"></script>
<!-- Flot plugins -->
<script src="{{url('admins/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{url('admins/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{url('admins/vendors/flot.curvedlines/curvedLines.js')}}"></script>
<!-- DateJS -->
<script src="{{url('admins/vendors/DateJS/build/date.js')}}"></script>
<!-- JQVMap -->
<script src="{{url('admins/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
<script src="{{url('admins/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{url('admins/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{url('admins/vendors/moment/min/moment.min.js')}}"></script>
<script src="{{url('admins/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<!-- Custom Theme Scripts -->
{{--<script src="{{url('admins/build/js/custom.min.js')}}"></script>--}}
<script src="{{url('js/sweetalert/dist/sweetalert.min.js')}}"></script>



<script type = "text/javascript">

    function like(id){

        var csrf =  $('meta[name="csrf-token"]').attr('content');

            $.ajax({

                url:"{{ url('articles/likes') }}"+'/'+id,
                type:"POST",
                data:{'_method':'POST','_token':csrf},
                success:function($data){
                    $('#contain').load(document.URL +  ' #contain');

                },
                error:function(){
                    swal("Error Bro")
                }
            });
            //return false;

    }

    function create() {

        $('#status form').submit(function(e) {

            var url = "path/to/your/script.php"; // the script where you handle the form input.

            $.ajax({

                url:"{{ url('articles') }}",
                type:"POST",
                data:$('#status form').serialize(),
                success:function(data){
                    $('#contain').load(document.URL +  ' #contain');
                    swal({

                        text:'Saran Terkirim',
                        icon:'success',
                        timer:'1500'
                    })
                },
                error:function(){

                    swal("Error Bro")
                }
            });

            e.preventDefault(); // avoid to execute the actual submit of the form.
        });



    }
    
    function comment() {
        
    }


    function deleteData(id){
        var csrf =  $('meta[name="csrf-token"]').attr('content');


        swal({

            title:'Yakin?',
            text:"Menghapus data?",
            type:"warning",
            showCancelButton:true,
            cancelBuuttonColor:"#d33",
            confirmButtonColor:"#308506",
            confirmButtonText:"Ya, Hapus data"

        }).then(function(){
            $.ajax({
                url:"{{url('articles')}}"+'/'+id,
                type:"POST",
                data:{'_method':'DELETE','_token':csrf},
                cache:false,
                success:function(data){
                    $('#contain').load(document.URL +  ' #contain');

                    swal({
                        title:'Success',
                        text:'Data Terhapus',
                        icon:'success',
                        timer:'1500'
                    })
                },
                error:function(){
                    swal({
                        title:'Fail',
                        text:'Data Gagal Terhapus',
                        icon:'error',
                        timer:'1500'
                    })
                }
            });
        });
    }


</script>


