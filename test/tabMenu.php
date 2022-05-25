<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin-top: 100px;
            font-family: 'Trebuchet MS', serif;
            line-height: 1.6
        }

        .container {
            width: 800px;
            margin: 0 auto;
        }



        ul.tabs {
            margin: 0px;
            padding: 0px;
            list-style: none;
        }

        ul.tabs li {
            background: none;
            color: #222;
            display: inline-block;
            padding: 10px 15px;
            cursor: pointer;
        }

        ul.tabs li.current {
            background: #ededed;
            color: #222;
        }

        .tab-content {
            display: none;
            background: #ededed;
            padding: 15px;
        }

        .tab-content.current {
            display: inherit;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="container">

        <ul class="tabs">
            <li class="tab-link current" data-tab="tab-1">Tab One</li>
            <li class="tab-link" data-tab="tab-2">Tab Two</li>
            <li class="tab-link" data-tab="tab-3">Tab Three</li>
            <li class="tab-link" data-tab="tab-4">Tab Four</li>
        </ul>

        <div id="tab-1" class="tab-content current">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
        <div id="tab-2" class="tab-content">
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
        <div id="tab-3" class="tab-content">
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </div>
        <div id="tab-4" class="tab-content">
            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>

    </div><!-- container -->
    <script src="tabMenu.js"></script>
</body>

</html>