<html>
    <head>

    </head>
    <body>
        <a href="logout" class="logout" onclick="signOut()">Logout</a>
    </body>
    <script>
        function signOut() {
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signOut();
        }
    </script>
</html>