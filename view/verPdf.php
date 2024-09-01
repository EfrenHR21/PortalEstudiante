<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/estiloindex.css">
</head>
<body>
    <header>
        
    </header>
    <main>
        <h1>ver pdf</h1>
        <hr>
        <div class="verPdf">
        <embed class="pdf" src="../assets/doc/Trabajo Final - Huamán Reyna y Pacheco Ccayahuallpa.pdf" type="application/pdf" >
        </div>   
    </main>
    <footer>
    </footer>
    <!-- Iframe code -->
    <iframe
        id="iframeId"
        src="https://www.stack-ai.com/embed/205d57de-1967-4207-8337-30d905a234c4/a816097c-2a24-4f9c-8a94-a2bfed696c6c/66d3fc24db95eb4dab6c2238"
        width="350"
        height="600"
        frameborder="0"
        style="position: fixed; z-index: 1; bottom: 15px; right: 15px;"
    ></iframe>

    <!-- Script for handling the resizing -->
    <script>
    function handleMessage(event) {
        if (event.data.type === 'chatbotStateChange') {
        const iframe = document.getElementById('iframeId')
        if (iframe) {
            if (event.data.isClosed) {
            iframe.style.width = '80px'
            iframe.style.height = '80px'
            iframe.style.bottom = '15px'
            } else {
            iframe.style.width = '450px'
            iframe.style.height = '650px'
            iframe.style.bottom = '-15px'
            }
        }
        }
    }

    // Attach event listener
    window.addEventListener('message', handleMessage)

    // If you want to clean up the event listener when the page unloads (optional)
    window.addEventListener('beforeunload', function () {
        window.removeEventListener('message', handleMessage)
    })
    </script>
</body>
</html>