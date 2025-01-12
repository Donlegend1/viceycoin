import React, { useState } from "react";
import { ethers } from "ethers";
import axios from "axios";

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
                const provider = new ethers.providers.Web3Provider(window.ethereum);
                await provider.send("eth_requestAccounts", []);
                const signer = provider.getSigner();
                const walletAddress = await signer.getAddress();
                setAddress(walletAddress);
                setConnected(true);

                // Save wallet address to backend
                await axios.post("/api/save-wallet", { address: walletAddress });
            } else if (window.BinanceChain) {
                // Binance Wallet
                const walletAddress = await window.BinanceChain.request({
                    method: "eth_requestAccounts",
                });
                setAddress(walletAddress[0]);
                setConnected(true);

                // Save wallet address to backend
                await axios.post("/api/save-wallet", { address: walletAddress[0] });
            } else {
                alert("Please install MetaMask, Binance Wallet, or a compatible wallet.");
            }
        } catch (err) {
            console.error(err);
            setError("Failed to connect wallet.");
        }
    };

    return (
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
    );
};

export default WalletConnect;
