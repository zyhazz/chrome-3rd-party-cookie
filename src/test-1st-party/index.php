<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page with Iframe</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
        }
        #container {
            display: flex;
            height: 100%;
        }
        #menu {
            width: 20%;
            background-color: #f0f0f0;
            padding: 20px;
        }
        #content {
            flex-grow: 1;
        }
        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>
</head>
<body>
    <div id="container">
        <div id="menu">
            <ul>
                <li><a href="https://app.test-1st-party.com" target="contentFrame">1st party</a></li>
                <li><a href="https://test-3rd-party.com" target="contentFrame">3rd party</a></li>
            </ul>
        </div>
        <div id="content">
            <iframe name="contentFrame" src="https://app.test-1st-party.com"></iframe>
        </div>
    </div>
</body>
</html>
