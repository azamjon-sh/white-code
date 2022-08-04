<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <title>New project</title>
</head>
<body>
<div id="app">
    <content-component/>
</div>
<script src="{{mix('js/app.js')}}"></script>
</body>
</html>
<script>

    import ContentComponent from "../js/components/ContentComponent";
    export default {
        components: {ContentComponent}
    }
</script>
