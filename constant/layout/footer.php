
             <?php
             include('./constant/connect.php');
            
             ?>
             
          
        </div>
          
    </div>
     <script language="javascript">
var today = new Date();
document.getElementById('ti').innerHTML=today;

var today = new Date();
document.getElementById('time').innerHTML=today;
 </script>
    
    <script src="assets/js/lib/jquery/jquery.min.js"></script>
    
    <script src="assets/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="assets/js/lib/bootstrap/js/bootstrap.min.js"></script>
    
    <script src="assets/js/jquery.slimscroll.js"></script>
    
    <script src="assets/js/sidebarmenu.js"></script>
    
    <script src="assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>


 <script src="assets/js/lib/sweetalert/sweetalert.min.js"></script>
    
    <script src="assets/js/lib/sweetalert/sweetalert.init.js"></script>
   

    <script src="assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/lib/weather/weather-init.js"></script>
    <script src="assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/js/lib/owl-carousel/owl.carousel-init.js"></script>


   
    
    <script src="assets/js/custom.min.js"></script>

   
     <script src="assets/js/lib/datatables/datatables.min.js"></script>
    <script src="assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="assets/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="assets/js/lib/datatables/datatables-init.js"></script>

     <script src="assets/js/lib/calendar-2/moment.latest.min.js"></script>
    
    <script src="assets/js/lib/calendar-2/semantic.ui.min.js"></script>
    
    <script src="assets/js/lib/calendar-2/prism.min.js"></script>
    
    <script src="assets/js/lib/calendar-2/pignose.calendar.min.js"></script>
    
    <script src="assets/js/lib/calendar-2/pignose.init.js"></script>

 <script src="assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="assets/js/lib/html5-editor/wysihtml5-0.3.0.js"></script>
    <script src="assets/js/lib/html../assets/5-editor/bootstrap-wysihtml5.js"></script>
    <script src="assets/js/lib/html5-editor/wysihtml5-init.js"></script>
</body>

</html>
<script>
function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8);
};
                                        </script>
                                        <script>
    // WRITE THE VALIDATION SCRIPT.
    function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
    }    
</script>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<style>
       .goog-logo-link {
    display:none !important;
} 
    
.goog-te-gadget{
    color: transparent;
}
.goog-te-gadget .goog-te-combo {
    margin: 0px 0;
        padding: 8px;
}
#google_translate_element{
        padding-top: 14px;
}
</style>

<script>
    
function onReady(callback) {
    var intervalID = window.setInterval(checkReady, 1000);
    function checkReady() {
        if (document.getElementsByTagName('body')[0] !== undefined) {
            window.clearInterval(intervalID);
            callback.call(this);
        }
    }
}

function show(id, value) {
    document.getElementById(id).style.display = value ? 'block' : 'none';
}

onReady(function () {
    show('page', true);
    show('loading', false);
});

</script>



