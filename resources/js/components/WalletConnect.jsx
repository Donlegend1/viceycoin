import React, { useState } from "react";
import { ethers } from "ethers";
import axios from "axios";
import Header from "./Header";
import Banner from "./Banner";
import StarryBackground from "./StarryBackground";



const WalletConnect = () => {
    const [address, setAddress] = useState("");
    const [connected, setConnected] = useState(false);
    const [error, setError] = useState("");

    // const connectWallet = async () => {
    //     try {
    //         if (window.ethereum) {
    //             // Request wallet connection
    //             const provider = new ethers.providers.Web3Provider(window.ethereum);
    //             await provider.send("eth_requestAccounts", []);
    //             const signer = provider.getSigner();
    //             const walletAddress = await signer.getAddress();
    //             setAddress(walletAddress);
    //             setConnected(true);

    //             // Save wallet address to backend
    //             await axios.post("/api/save-wallet", { address: walletAddress });

    //             alert("Wallet connected and address saved!");
    //         } else {
    //             alert("Please install MetaMask or a compatible wallet.");
    //         }
    //     } catch (err) {
    //         console.error(err);
    //         setError("Failed to connect wallet.");
    //     }
    // };


    const connectWallet = async () => {
        try {
            if (window.ethereum) {
                console.log(window.ethereum)
                window.ethereum.request({method: 'eth_requestAccounts'})
                .then(result =>
                {
                    setAddress(result[0]);
                    console.log(result[0])
                    setConnected(true);
                   
               
                }
                )
                // const provider = new ethers.providers.Web3Provider(window.ethereum);
                // await provider.send("eth_requestAccounts", []);
                // const signer = provider.getSigner();
                // const walletAddress = await signer.getAddress();
                // setAddress(walletAddress);
                // setConnected(true);

                // Save wallet address to backend
                // await axios.post("/api/save-wallet", { address: walletAddress });
            } 
            // else if (window.BinanceChain) {
            //     // Binance Wallet
            //     const walletAddress = await window.BinanceChain.request({
            //         method: "eth_requestAccounts",
            //     });
            //     setAddress(walletAddress[0]);
            //     setConnected(true);

            //     // Save wallet address to backend
            //     // await axios.post("/api/save-wallet", { address: walletAddress[0] });
            // }
             else {
                alert("Please install MetaMask, Binance Wallet, or a compatible wallet.");
            }
        } catch (err) {
            console.error(err);
            setError("Failed to connect wallet.");
        }
    };

    return (

        <>
        {/* <StarryBackground /> */}
        <Header />
        <Banner />

        <section class="e ca">
        <div class="a">
        <div class="me nf fh wg ml ym zm lp nq">
            <div class="ha qb _d be">
            <div class="jc ng yo/2">
                <div class="wow fadeInUp hb qb be de no" data-wow-delay="0s">
                <div id="chart">
                <div className="flex flex-col items-center justify-center min-h-screen bg-gray-100">
                <h1 className="text-3xl font-bold mb-6">Crypto Wallet Connection</h1>
                {!connected ? (
                    <button
                        onClick={connectWallet}
                        className="px-6 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600"
                    >
                        Connect Wallet
                    </button>
                ) : (
                    <div className="bg-white p-4 rounded shadow-md mt-4">
                        <p className="text-lg font-medium">Connected Address:</p>
                        <p className="text-sm text-gray-600">{address}</p>
                    </div>
                )}
                {error && <p className="text-red-500 mt-4">{error}</p>}
            </div>
                </div>
                </div>
            </div>
            <div class="jc ng yo/2">
                <div class="wow fadeInUp ib" data-wow-delay="0s">
                <span class="va gi pi ri bj fn">
                    TOKEN
                </span>
                <h2 class="va li pi ui yi vl bo">
                    Token Sale
                </h2>
                <p class="gi qi xi ul">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus condimentum tellus at lectus pulvinar, id auctor
                    felis iaculis. In vestibulum neque sem, at dapibus justo
                    facilisis in.
                </p>
                </div>
                <div class="wow fadeInUp ie" data-wow-delay="0s">
                <p class="qb">
                    <span class="oa dc rc oe of"></span>
                    <span class="gi qi xi ul">
                    73% Financial Overhead
                    </span>
                </p>
                <p class="qb">
                    <span class="oa dc rc oe sf"></span>
                    <span class="gi qi xi ul">
                    55% Bonus & found
                    </span>
                </p>
                <p class="qb">
                    <span class="oa dc rc oe tf"></span>
                    <span class="gi qi xi ul">
                    38% it infastrueture
                    </span>
                </p>
                <p class="qb">
                    <span class="oa dc rc oe uf"></span>
                    <span class="gi qi xi ul">
                    20.93% Gift Code Inventory
                    </span>
                </p>
                </div>
            </div>
            </div>
        </div>
        </div>

        <div class="d m v ea">
        <img src="/images/shapes/token-sale-shape.svg" alt="shape" />
        </div>
    </section>
       
        </>
    );
};

export default WalletConnect;
