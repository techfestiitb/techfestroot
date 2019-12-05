<!DOCTYPE html>
<html lang="en">
<head>
    @include('2019.workshops.layouts.meta')
    <script type="text/javascript">
        if (screen.width > 992) {
            document.location = "/hospitality/form";
        }
    </script>
    <link href="/2019/workshops/assets/css/material-bootstrap-wizard.css" rel="stylesheet" />

</head>
<body style="margin: 0px; overflow-x: hidden">
@include('2019.mobile.layouts.header')

<div class="row" style="position: absolute; margin-top: 16vw;overflow-y: scroll; ">
    @include('2019.hospitality.hospitality_form')
</div>
@include('2019.workshops.layouts.footer')
</body>