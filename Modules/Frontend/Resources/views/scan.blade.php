<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>QR Code scanner</title>
    <link rel="stylesheet" href="{{ asset('scan/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('scan/css/HelperClass.css') }}" />
</head>

<body>
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row r-gap justify-content-center">
                <!-- <div class="col-12 d-flex justify-content-center">
          <div class="logo d-flex mb-5 mb-md-0">
            <img src="img/logo.png" alt="" />
          </div>
        </div> -->

                <!-- scanner -->

                <div class="col-md-6 d-flex align-items-center">
                    <div class="wrapper">
                        <h1 class="d-flex">
                            <div class="title">
                                <p>scan</p>
                                <span>qr code</span>
                            </div>
                            <img src="{{ asset('scan/img/qrcode.svg') }}" alt="">
                        </h1>
                        <div id="qr-reader"></div>
                        <div id="qr-reader-results"></div>
                    </div>
                </div>

                <div class="copyright col-12">
                    <p>© POWERED BY CREATIVE TWINKLES</p>
                </div>
            </div>
        </div>
    </section>


    <!-- start script  -->

    <script src="{{ asset('scan/js/html5-qrcode.min.js') }}"></script>
    <script>
        function docReady(fn) {
            // see if DOM is already available
            if (
                document.readyState === "complete" ||
                document.readyState === "interactive"
            ) {
                // call on next available tick
                setTimeout(fn, 1);
            } else {
                document.addEventListener("DOMContentLoaded", fn);
            }
        }

        docReady(function() {
            var resultContainer = document.getElementById("qr-reader-results");
            var lastResult,
                countResults = 0;

            function onScanSuccess(decodedText, decodedResult) {
                (async () => {
                    const rawResponse = await fetch('http://127.0.0.1:8000/api/attend', {
                        method: 'POST',
                        headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(
                            {
                                "_token": "{{ csrf_token() }}",
                                'code':decodedText,
                            })
                    });
                    const content = await rawResponse.json().then(data => {

                        if (data.status == 'success') {

                            resultContainer.innerHTML = `
                                <div class='myResult'>
                                    <div class='text-left mb-2 success_msg'>${data.msg}</div>
                                    <div class='text-left mb-2'>Name: ${data.data.name}</div>
                                </div>
                            `

                        } else {

                            resultContainer.innerHTML = `
                                <div class='myResult'>
                                    <div class='text-left error'>${data.code[0]}</div>
                                </div>
                            `
                        }
                    });

                })();
                if (decodedText !== lastResult) {
                    // console.log('amr');
                    ++countResults;
                    lastResult = decodedText;
                    // Handle on success condition with the decoded message.
                    // console.log(`Scan result ${decodedText}`, decodedResult);
                    // resultContainer.innerHTML = lastResult
                }

            }

            let html5QrcodeScanner = new Html5QrcodeScanner(
                "qr-reader", {
                    fps: 0,
                    qrbox: {
                        width: 150,
                        height: 150
                    }
                },
                /* verbose= */
                false);
            html5QrcodeScanner.render(onScanSuccess);

            // document.getElementById('newReader').addEventListener('click', () => {

            // })


        });
    </script>


</body>

</html>
