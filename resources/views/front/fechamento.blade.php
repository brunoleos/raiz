
       

    </div>
    <!-- / animsation -->
    
<script src="{{ ('front/js/jquery.1.12.4.js') }}"></script>
<script src="{{ ('front/js/jquery-ui.min.js') }}"></script>
<script src="{{ ('front/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ ('front/js/jquery.appear.js') }}"></script>
<script src="{{ ('front/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ ('front/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ ('front/js/jquery.countTo.js') }}"></script>
<script src="{{ ('front/js/jquery.bxslider.min.js') }}"></script>
<script src="{{ ('front/js/jquery.cubeportfolio.min.js') }}"></script>
<script src="{{ ('front/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ ('front/js/masterslider.min.js') }}"></script>
<script src="{{ ('front/js/velocity.min.js') }}"></script>
<script src="{{ ('front/js/jquery.animsition.js') }}"></script>


  

<script src="{{ url('front/js/retina.min.js') }}"></script>
<script src="{{ url('front/js/custom.js') }}"></script>

    <!-- Latest compiled and minified JavaScript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).on("input", "#message", function () {
    var limite = 255;
    var caracteresDigitados = $(this).val().length;
    var caracteresRestantes = 'Restam ' + (limite - caracteresDigitados) + ' caratecteres a ser digitado!';

    $(".caracteres").text(caracteresRestantes);
});


</script>

<script type="text/javascript">
// jQuery Meio Mask
$('#telefone').setMask("(99) 9999-99999").ready(function(event) {
    var target, phone, element;
    target = (event.currentTarget) ? event.currentTarget : event.srcElement;
    phone = target.value.replace(/\D/g, '');
    element = $(target);
    element.unsetMask();
    if(phone.length > 10) {
        element.setMask("(99) 99999-9999");
    } else {
        element.setMask("(99) 9999-99999");
    }
});
</script>

<script type="text/javascript">
    
    $(function(){
  $('.bxslider').bxSlider({
    mode: 'fade',
    captions: true,
    slideWidth: 390,
    pager: false,
    touchEnabled: true,
    useCSS: false,
    slideMargin: false,
    wrapperClass: "foto"
  });
});

</script>

</body>

</html>
