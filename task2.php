<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <a href="javascript: alert('Hello World')">Click Me</a><br />
    <a href="javascript: void(0)" onclick="myAjax();">Check</a><br />

    <a href="javascript:void(0)" onclick="callPrintFunction('task1')">Task1</a><br />

    <a href="javascript: void(0)" onclick="callPrintFunction('task2');">Task2</a><br />

    <a href="javascript: void(0)" onclick="callPrintFunction('task3');">Task3</a><br />

    <div class="myclass"></div>


    <script type="text/javascript">
        function myAjax() {
            var result = "<?php myFunc('Tapas'); ?>";
            alert(result);
        }

        //const type = 'task1';

        function callPrintFunction(type) {
            console.log(type);
            html = "<?php echo callPrintFunction2('task1'); ?>";
            //html = "<?php //echo callPrintFunction2('<script>type</script>'); 
                        ?>";
            $(".myclass").html(html);
        }
    </script>

    <?php
    function myFunc($name)
    {
        echo $name;
    }

    function callPrintFunction2($type)
    {
        if ($type == 'task1') {
            $data = '<div><h1>Task1</h1></div>';
        } elseif ($type == 'task2') {
            $data = '<div><h1>Task2</h1></div>';
        } elseif ($type == 'task3') {
            $data = '<div><h1>Task3</h1></div>';
        } else {
            $data = '<div><h1>No Task</h1></div>';
        }
        return $data;
    }
    ?>



</body>

</html>