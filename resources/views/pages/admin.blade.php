<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hertfordshire Law Society</title>
    <link rel="stylesheet" href="https://bootswatch.com/paper/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css">
    <link rel="stylesheet" href="{{ asset('css/angular-material.min.css') }}">
    <link rel="stylesheet" href="/css/admin.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <base href="/admin/">
</head>
<body layout="column" ng-app="app">

<div ui-view></div>

</body>

<script src="{{ asset('js/vendor/angular.min.js') }}"></script>
<script src="{{ asset('js/vendor/angular-ui-router.min.js') }}"></script>
<script src="{{ asset('js/vendor/angular-material.min.js') }}"></script>
<script src="{{ asset('js/vendor/ui-bootstrap-tpls.min.js') }}"></script>
<script src="{{ asset('js/vendor/satellizer.min.js') }}"></script>
<script src="{{ asset('ng-admin/app.js') }}"></script>
<script src="{{ asset('ng-admin/app.routes.js') }}"></script>
<script src="{{ asset('ng-admin/auth/auth.controller.js') }}"></script>
<script src="{{ asset('ng-admin/users/users.controller.js') }}"></script>
<script src="{{ asset('ng-admin/articles/articles.controller.js') }}"></script>
<script src="{{ asset('ng-admin/requests/requests.controller.js') }}"></script>

</html>