@if(auth()->user()->role=='admin')
@include('layouts.admin-menu')

@endif


@if(auth()->user()->role=='user')

@include('layouts.user-menu')
@endif

<script>
    $(document).ready(function(){
        $('#change').on('change', function() {
          if ( this.value == 'bank')
          //.....................^.......
          {
            $("#bank").show();
            $("#paypal").hide();
            $("#bitcion").hide();
          }
          else if( this.value == 'Paypal')
          {
            $("#bank").hide();
            $("#paypal").show();
            $("#bitcion").hide();
          }else if( this.value == 'Bitcion'){
            $("#bank").hide();
            $("#paypal").hide();
            $("#bitcion").show();
          }else{
            $("#bank").hide();
            $("#paypal").hide();
            $("#bitcion").hide();
          }
        });
    });
    </script>
