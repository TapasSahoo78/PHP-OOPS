<!DOCTYPE html>
<html>
<title>Days</title>

<body>
    <a href="" onclick="removeday(event)" class="deletebtn">Delete</a>

    <script>
        async function removeday(e) {
            e.preventDefault();
            document.body.innerHTML += '<br>' + await (await fetch('?remove=1')).text();
        }
    </script>

</body>

</html>