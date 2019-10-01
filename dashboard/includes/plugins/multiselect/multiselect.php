<html>
<head>
    <title></title>
    <meta content="">
    <!-- احذف app.css and app.js وضيف دول-->
    <link rel="stylesheet" href="dashboard/includes/plugins/multiselect/bootstrap-multiselect.css" type="text/css"/>
    <link rel="stylesheet" href="bootstrap.min.css" type="text/css"/>

    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
    <script type="text/javascript" src="dashboard/includes/plugins/multiselect/bootstrap-multiselect.js"></script>

</head>
<body>
<h3>اختيار اكثر من واحده</h3>
<script type="text/javascript">
    $(document).ready(function () {
        $('#example-getting-started').multiselect();
    });
</script>
<select id="example-getting-started" multiple="multiple">
    <option value="cheese">Cheese</option>
    <option value="tomatoes">Tomatoes</option>
    <option value="mozarella">Mozzarella</option>
    <option value="mushrooms">Mushrooms</option>
    <option value="pepperoni">Pepperoni</option>
    <option value="onions">Onions</option>
</select>

<h2>اختيار واحده فقط</h2>

<div class="example">
    <script type="text/javascript">
        $(document).ready(function () {
            $('#example-simulate-single').multiselect({
                onChange: function (option, checked) {
                    var values = [];
                    $('#example-simulate-single option').each(function () {
                        if ($(this).val() !== option.val()) {
                            values.push($(this).val());
                        }
                    });

                    $('#example-simulate-single').multiselect('deselect', values);
                }
            });
        });
    </script>
    <select id="example-simulate-single" multiple="multiple">
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="3">Option 3</option>
        <option value="4">Option 4</option>
        <option value="5">Option 5</option>
        <option value="6">Option 6</option>
    </select>
</div>


</body>
</html>
