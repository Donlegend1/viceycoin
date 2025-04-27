<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use GuzzleHttp\Client;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */

     // ✅ Get the API key from .env
     public function create()
     {
        $apiKey = "WZMNEGP-39CMTQE-JWEVZKY-JHA3365"; // Make sure this exists in .env
     

        // Initialize cURL
        $curl = curl_init();
        
        // Data to send in the POST request
        $data = [
            'price_amount' => 1000,  // Amount in the smallest unit of the currency
            'price_currency' => 'usd',
            'order_id' => 'RGDBP-21314',
            'order_description' => 'Apple Macbook Pro 2019 x 1',
            'ipn_callback_url' => 'https://nowpayments.io',  // Replace with your actual callback URL
            'success_url' => 'https://nowpayments.io',  // Replace with your actual success URL
            'cancel_url' => 'https://nowpayments.io',  // Replace with your actual cancel URL
        ];
        
        // Prepare cURL request
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://api.nowpayments.io/v1/invoice',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,  // Increase the timeout for larger transactions
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => [
                'x-api-key: ' . $apiKey,
                'Content-Type: application/json'
            ],
        ]);
        
        // Execute the cURL request
        $response = curl_exec($curl);
        
        // Error handling
        if(curl_errno($curl)) {
            echo 'cURL error: ' . curl_error($curl);
        } else {
            // Decode the response
            $responseData = json_decode($response, true);
            \Log::info($responseData);
        
            // Check for errors in the response
            if (isset($responseData['error'])) {
                echo 'Error: ' . $responseData['error']['message'];
            } else {
                // If successful, show the invoice details or payment link
                echo 'Invoice created successfully: ' . $responseData['invoice_url'];  // Assuming response contains 'invoice_url'
            }
        }
        
        // Close cURL
        curl_close($curl);
    
        

     }
     
     public function processPayment()
    {
        // Validate the form input
        // $validator = Validator::make($request->all(), [
        //     'amount' => 'required|numeric',
        //     'currency' => 'required|in:BTC,ETH,LTC', // Specify the accepted cryptocurrencies
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        // Prepare data for the payment request
        $amount = 200;
        $currency = "usd";

        // Make a request to NowPayments API using GuzzleHTTP
        $client = new Client();
        $response = $client->post('https://api.nowpayments.io/v1/payment', [
            'json' => [
                'price_amount' => $amount,
                'price_currency' => $currency,
                'order_id' => 'RGDBP-21314',
                'pay_currency' => 'usd',
                // Add other parameters as needed
            ],
            'headers' => [
                'x-api-key' => 'WZMNEGP-39CMTQE-JWEVZKY-JHA3365',
            ],
        ]);

        $responseBody = json_decode($response->getBody(), true);
        $paymentLink = $responseBody['payment_url'];

        // return view('payment-success', ['paymentLink' => $paymentLink]);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaymentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentRequest $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
