
<!-- bootstrap -->
<script src="{{asset("assets")}}/admin/js/bootstrap.min.js"></script>
<script src="{{asset("assets")}}/admin/js/jquery.scrollTo.min.js"></script>
{{--<script src="{{asset("assets")}}/admin/js/jquery.nicescroll.js" type="text/javascript"></script>--}}{{-- summernote u çalıştırmıyor--}}
<!-- charts scripts -->
<script src="{{asset("assets")}}/admin/assets/jquery-knob/js/jquery.knob.js"></script>
<script src="{{asset("assets")}}/admin/js/jquery.sparkline.js" type="text/javascript"></script>
<script src="{{asset("assets")}}/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="{{asset("assets")}}/admin/js/owl.carousel.js"></script>
<!-- jQuery full calendar -->
<<script src="{{asset("assets")}}/admin/js/fullcalendar.min.js"></script>
<!-- Full Google Calendar - Calendar -->
<script src="{{asset("assets")}}/admin/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
<!--script for this page only-->
<script src="{{asset("assets")}}/admin/js/calendar-custom.js"></script>
<script src="{{asset("assets")}}/admin/js/jquery.rateit.min.js"></script>
<!-- custom select -->
<script src="{{asset("assets")}}/admin/js/jquery.customSelect.min.js"></script>
<script src="{{asset("assets")}}/admin/assets/chart-master/Chart.js"></script>

<!--custome script for all page-->
<script src="{{asset("assets")}}/admin/js/scripts.js"></script>
<!-- custom script for this page-->
<script src="{{asset("assets")}}/admin/js/sparkline-chart.js"></script>
<script src="{{asset("assets")}}/admin/js/easy-pie-chart.js"></script>
<script src="{{asset("assets")}}/admin/js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{asset("assets")}}/admin/js/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{asset("assets")}}/admin/js/xcharts.min.js"></script>
<script src="{{asset("assets")}}/admin/js/jquery.autosize.min.js"></script>
<script src="{{asset("assets")}}/admin/js/jquery.placeholder.min.js"></script>
<script src="{{asset("assets")}}/admin/js/gdp-data.js"></script>
<script src="{{asset("assets")}}/admin/js/morris.min.js"></script>
<script src="{{asset("assets")}}/admin/js/sparklines.js"></script>
<script src="{{asset("assets")}}/admin/js/charts.js"></script>
<script src="{{asset("assets")}}/admin/js/jquery.slimscroll.min.js"></script>
<!-- javascripts -->
<script>
    //knob
    $(function() {
        $(".knob").knob({
            'draw': function() {
                $(this.i).val(this.cv + '%')
            }
        })
    });

    //carousel
    $(document).ready(function() {
        $("#owl-slider").owlCarousel({
            navigation: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true

        });
    });

    //custom select box

    $(function() {
        $('select.styled').customSelect();
    });

    /* ---------- Map ---------- */
    $(function() {
        $('#map').vectorMap({
            map: 'world_mill_en',
            series: {
                regions: [{
                    values: gdpData,
                    scale: ['#000', '#000'],
                    normalizeFunction: 'polynomial'
                }]
            },
            backgroundColor: '#eef3f7',
            onLabelShow: function(e, el, code) {
                el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
            }
        });
    });
</script>
