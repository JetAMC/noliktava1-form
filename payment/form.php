<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="redirect.php" method="POST">
        <input name="p_firstname" type="text">
        <input type="submit">
    </form>
    <!-- <button id="payNow" type="button">Payment Demo</button> -->
    
    <!-- <script type="text/javascript" src="https://bank.paysera.com/assets/js/paysera-checkout/app.min.js"></script> -->

    <!-- <script>
        var checkoutApp = new PayseraCheckout.App();
        checkoutApp.on(PayseraCheckout.AppEvent.SUCCESS, function () {
            // happens after successful payment, when window is closed
        });
     
        checkoutApp.on(PayseraCheckout.AppEvent.ERROR, function (message) {
           // happens after unsuccessful payment when window is closed or when buyer closes window.
            switch (message.code) {
                case PayseraCheckout.ErrorCode.USER_CLOSED:
                    // buyer closed window
                    break;
     
                case PayseraCheckout.ErrorCode.CARD_INITIAL_RESULT_FAILED:
                    // failed to get payment configuration
                    break;
     
                case PayseraCheckout.ErrorCode.CARD_AUTHORIZATION_FAILED:
                    // failed to authorize card
                    break;
     
                case PayseraCheckout.ErrorCode.CARD_RESULT_FAILED:
                    // wrong payment status after card authorization/3D secure
                    break;
     
                case PayseraCheckout.ErrorCode.CARD_SIGNATURE_FAILED:
                    // failed to perform 3D secure step
                    break;
            }
        });
     
        // Button click event
        var payButton = document.getElementById('payNow');
        payButton.addEventListener('click', function () {
            checkoutApp.pay({
                data: '', // generated data
                sign: '' // generated sign
            });
        });
    </script> -->
</body>
</html>