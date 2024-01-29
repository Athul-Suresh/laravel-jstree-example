<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel JsTree Exampole</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/themes/default/style.min.css" />

</head>

<body class="antialiased">
    <div id="jstree"></div>
    <script src="https://cdn.staticfile.org/jquery/3.7.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js"></script>

    <script>
        $(function() {
            $('#jstree').jstree({
                'core': {
                    'data': [{
                            'text': 'Child Node 1',
                            'children': [
                                'Child Node 1.1',
                                'Child Node 1.2'
                            ]
                        },
                        'Child Node 2'
                    ]
                }
            });
        });
    </script>

</body>

</html>
