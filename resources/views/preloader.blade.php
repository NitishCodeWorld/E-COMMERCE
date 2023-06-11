<html>

<head>
    <style>
        body {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .spinner {
            width: 80px;
            height: 80px;

            border: 2px solid #f3f3f3;
            border-top: 3px solid #f25a41;
            border-radius: 100%;

            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;

            animation: spin 1s infinite linear;
        }

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        #overlay {
            height: 100%;
            width: 100%;
            background: rgba(255, 255, 255);
            position: fixed;
            left: 0;
            right: 0;
        }
    </style>
    <script>
        window.addEventListener('load', function(){
                document.getElementById('overlay').style.display = 'none';
            })
    </script>
</head>

<body>
    <div id="overlay">
        <div class="spinner"></div>
    </div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/-40XnGk0A_g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</body>

</html>