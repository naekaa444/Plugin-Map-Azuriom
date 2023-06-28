<!DOCTYPE html>
<title>Map | {{ site_name() }}</title>

<head>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
        }

        #iframeContainer {
            position: relative;
            width: 100%;
            height: 100%;
        }

        iframe {
            display: block;
            border: none;
            width: 100%;
            height: 100%;
        }

        #returnButton {
            position: absolute;
            bottom: 10px;
            right: 10px;
            z-index: 999;
        }
    </style>
</head>

<div id="iframeContainer">
    <iframe src="{{ setting('map.url') }}" width="100%" height="100%"></iframe>
    <a href="/" id="returnButton" class="btn btn-secondary">{{ trans('map::messages.map.back') }}</a>
</div>
