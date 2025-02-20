<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Demo</title>
    @vite('resources/css/app.css')
</head>

<body class="flex items-center justify-center flex-col h-full w-full bg-gray-100">
    <header class="h-16 w-full bg-gray-200 flex items-center justify-center font-bold relative">
        <!-- Back button with icon -->
        <a href="{{ route('home') }}" class="absolute left-4 text-gray-700">
            <i class="fas fa-arrow-left"></i> <!-- Font Awesome back icon -->
        </a>

        <!-- Header text -->
        <h2>পণ্যের বিবরণ</h2>
    </header>

    <div class="flex items-center justify-center flex-col m-5 mb-24 w-[95%] ">

        <!-- card design  -->

        <div class="w-full h-full mx-auto p-4 border rounded-lg shadow-lg">
            <!-- Payment Section -->
            <h2 class="text-lg font-bold mb-4">Payment</h2>


            <!-- Hidden Payment Details -->
            <div class="mt-4 ">
                <!-- Method Input -->
                <label for="paymentmethod" class="block text-gray-700 font-medium mt-4 mb-2">Payment Method</label>
                <input type="text" id="paymentmethod" class="w-full border rounded px-2 py-1"
                    value="{{ $findMethod['method'] }}">

                <!-- Number Input -->
                <label for="paymentNumber" class="block text-gray-700 font-medium mt-4 mb-2">Payment Number</label>
                <input type="text" id="paymentNumber" class="w-full border rounded px-2 py-1"
                    placeholder="Enter your payment number">

                <!-- Transaction Code -->
                <label for="transactionCode" class="block text-gray-700 font-medium mt-4 mb-2">Transaction Code</label>
                <input type="text" id="transactionCode" class="w-full border rounded px-2 py-1"
                    placeholder="Enter transaction code">
            </div>
        </div>

        <script>
            // Show Payment Details on Button Click
            const paymentButton = document.getElementById('paymentButton');
            const paymentDetails = document.getElementById('paymentDetails');

            paymentButton.addEventListener('click', () => {
                paymentDetails.classList.toggle('hidden'); // Show or hide the payment details
            });
        </script>


    </div>



</body>


</html>
