<html>
    <head>
   
    <link href="https://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet"
    type="text/css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
</head>
<body>
    
    Date : <input id="date_picker" >
    <script language="javascript">
        $(document).ready(function () {
            $("#date_picker").datepicker({
                minDate: 0
            });
        });
    </script>
     Date : <input id="dpicker" >
    <script language="javascript">
        $(document).ready(function () {
            $("#dpicker").datepicker({
                minDate: 0
            });
        });
    </script>
</body>
</html>