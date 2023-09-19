<script type="text/javascript">
  function formatNumber (num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
  }
  $('#shipping').change(function(){
    $('#total').html(formatNumber(parseInt({{ Cart::subtotal() }})+ parseInt($('#shipping').val())));
  });
</script>

<script src="{{ sc_file('js/sweetalert2.all.min.js') }}"></script>
<script>
      function alertJs(type = 'error', msg = '') {
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
      Toast.fire({
        type: type,
        title: msg
      })
    }

    function alertMsg(type = 'error', msg = '', note = '') {
      const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
        },
        buttonsStyling: true,
      });
      swalWithBootstrapButtons.fire(
        msg,
        note,
        type
      )
    }
</script>

<!--process cart-->
<script type="text/javascript">
  function addToCartAjax(id, instance = null, storeId = null){
    $.ajax({
        url: "{{ sc_route('cart.add_ajax') }}",
        type: "POST",
        dataType: "JSON",
        data: {
          "id": id,
          "instance":instance,
          "storeId":storeId,
          "_token":"{{ csrf_token() }}"
        },
        async: false,
        success: function(data){
          // console.log(data);
            error = parseInt(data.error);
            if(error ==0)
            {
              setTimeout(function () {
                if(data.instance =='default'){
                  $('.sc-cart').html(data.count_cart);
                }else{
                  $('.sc-'+data.instance).html(data.count_cart);
                }
              }, 1000);
              alertJs('success', data.msg);
            }else{
              if(data.redirect){
                window.location.replace(data.redirect);
                return;
              }
              alertJs('error', data.msg);
            }

            }
    });
  }
</script>
<!--//end cart -->


<!--message-->
@if(Session::has('success'))
<script type="text/javascript">
    alertJs('success', '{!! Session::get('success') !!}');
</script>
@endif

@if(Session::has('error'))
<script type="text/javascript">
  alertJs('error', '{!! Session::get('error') !!}');
</script>
@endif

@if(Session::has('warning'))
<script type="text/javascript">
  alertJs('error', '{!! Session::get('warning') !!}');
</script>
@endif
<!--//message-->

<script>
  window.eSwGlobalSetting = {};
  window.eSwGlobalSetting.lang = 'vi-VN';
</script>



<!-- Subiz Chat -->
<!-- End Subiz Chat -->


<script>
  $(function () {
      var subiz = '<script>!function (s, u, b, i, z) { var o, t, r, y; s[i] || (s._sbzaccid = z, s[i] = function () { s[i].q.push(arguments) }, s[i].q = [], s[i]("setAccount", z), r = ["widget.subiz.net", "storage.googleapis" + (t = ".com"), "app.sbz.workers.dev", i + "a" + (o = function (k, t) { var n = t <= 6 ? 5 : o(k, t - 1) + o(k, t - 3); return k !== t ? n : n.toString(32) })(20, 20) + t, i + "b" + o(30, 30) + t, i + "c" + o(40, 40) + t], (y = function (k) { var t, n; s._subiz_init_2094850928430 || r[k] && (t = u.createElement(b), n = u.getElementsByTagName(b)[0], t.async = 1, t.src = "https://" + r[k] + "sbz/appdeab.html?accid=" + z, n.parentNode.insertBefore(t, n), setTimeout(y, 2e3, k + 1)) })(0)) }(window, document, "script", "subiz", "acorexjjvxacyls251bd")<\/script>';

      var zalo = '<div class="zalo-chat-widget" data-oaid="349658598008800909" data-welcome-message="Rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="" data-height=""></div><script src="../sp.zalo.me/plugins/sdk.js" ><\/script>';

      setTimeout(function () {
          $("#chat-plugins").append(subiz);

          $("#chat-plugins").append(zalo);
      }, 5000);
  });
</script>


