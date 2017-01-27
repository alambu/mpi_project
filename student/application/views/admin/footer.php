
  </section>

    <!-- js placed at the end of the document so the pages load faster -->

    <script src="assets/admin/js/jquery-1.8.3.min.js"></script>
    <script src="assets/admin/js/bootstrap.min.js"></script>
    <script src="assets/admin/assets/bootstrapValidator/js/bootstrapValidator.min.js"></script>
    <script src="assets/admin/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script class="include" type="text/javascript" src="assets/admin/js/jquery.dcjqaccordion.2.7.js"></script>
    <script class="include" type="text/javascript" src="assets/admin/assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script src="assets/admin/js/jquery.scrollTo.min.js"></script>
    <script src="assets/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/admin/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="assets/admin/js/owl.carousel.js" ></script>
    <script src="assets/admin/js/jquery.customSelect.min.js" ></script>
    <script src="assets/admin/js/respond.min.js" ></script>

    <!--common script for all pages-->
    <script src="assets/admin/js/common-scripts.js"></script>
    <script src="assets/admin/js/icst.js"></script>

    <!--script for this page-->
    <script src="assets/admin/js/count.js"></script>
		<script src="http://cdn.ckeditor.com/4.5.8/full/ckeditor.js"></script>
		<script>
           // var config = {
           //    filebrowserBrowseUrl : '/admin/dropbox/documents',
           //    filebrowserImageBrowseUrl : '/admin/dropbox/images',
           // };

            CKEDITOR.replace('editor1');
            CKEDITOR.replace('editor2',config);

        </script>
  <script>


      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
  <script>
        $('.confirm').on('click',function(){
            return confirm('Are you sure ?');
        });
</script>
  <script>

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }else{
            $('#blah').attr('src', '');
        }
    }

    $("input[name=image]").change(function(){
        readURL(this);
    });
</script>


  </body>
</html>
