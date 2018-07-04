<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>API NOTIFICATION</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../_js/script.js"></script>
</head>
<body>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            if(Notification.permission !== 'granted'){
                Notification.requestPermission();
            }
        });

        function notifyMe(icon, title, msg, link){
            
            if(!Notification) {
                alert('O nagevador está sem permissão para as notificacões.');
                return;
            }
            
            if(Notification.permission !== 'granted'){
                Notification.requestPermission();
            } else {
                var notification = new Notification(title, {
                    icon: icon,
                    body: msg
                });

                notification.onclick = function() {
                    window.open(link);
                };
            }

        }

        var icon = 'https://cdn1.iconfinder.com/data/icons/color-bold-style/21/08-512.png';
        var title = 'Teste de título';
        var msg = 'Esse eh oteste de notificacao';
        var link = 'https://www.youtube.com/';
        
        setTimeout(function(){
            notifyMe(icon, title, msg, link);
        }, 2000);
        
    </script>

</body>
</html>