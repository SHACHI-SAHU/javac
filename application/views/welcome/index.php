<html>
    <head>
        <link rel="stylesheet"
              type="text/css"
              href="<?php echo base_url("resource/bs336/css/bootstrap.css") ?>"/>
        <link rel="stylesheet"
              type="text/css"
              href="<?php echo base_url("resource/bs336/css/bootstrap-theme.css") ?>"/>
        <script type="text/javascript"
                src="<?php echo base_url("resource/jquery-2.2.0.min.js") ?>">
        </script>
        <script type="text/javascript"
                src="<?php echo base_url("resource/handlebars-v4.0.5.js") ?>">
        </script>        
    </head>
    <body>
        <div class="container">
        <a href="#" id="link-1">Get data</a>
        <div id="emp-list-div">

        </div>
        </div>
    </body>
    <script type="text/javascript">
        $(document).ready(function (){
            $(document).on("click","#link-1",function (){
                FetchList(); 
            });//click           
        });//ready
    </script>
    <script type="text/javascript">
        function FetchList() {
            //      data 
//	1. fetched from emp/jsonRead
            $.ajax({
                url: '<?php echo site_url("emp/jsonRead") ?>',
                dataType: 'json',
                success: function (data) {
                    DisplayList(data);
                }
            });
        }
    </script>
    <script type="text/javascript">
        function DisplayList(data) {
//	2. How to Display:	template_emp_list{ID}	
            var ms = $("#template_emp_list").html();
            var mt = Handlebars.compile(ms);
            var mv = mt(data);
//	3. Where to Display:	emp-list-div
            $("#emp-list-div").html(mv);
        }
    </script>
    <script type="template/x-handlebars-template" id="template_emp_list">
        <?php
        include_once 'template_emp_list.php';
        ?>
    </script>

</html>