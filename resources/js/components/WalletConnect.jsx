import React, { useState } from "react";
import { ethers } from "ethers";
import axios from "axios";

const WalletConnect = () => {
    const [address, setAddress] = useState("");
    const [connected, setConnected] = useState(false);
    const [error, setError] = useState("");
    const [activeTab, setActiveTab] = useState("eng");  // State to track the active tab

    const connectWallet = async () => {
        try {
            if (window.ethereum) {
                window.ethereum.request({ method: "eth_requestAccounts" })
                    .then(result => {
                        setAddress(result[0]);
                        setConnected(true);
                    });
            } else {
                alert("Please install MetaMask, Binance Wallet, or a compatible wallet.");
            }
        } catch (err) {
            console.error(err);
            setError("Failed to connect wallet.");
        }
    };

    const handleTabChange = (tab) => {
        setActiveTab(tab);
    };
    const handleBuyToken = async () => {
        try {
            if (window.ethereum) {
                // Prepare the transaction object
                const txParams = {
                    from: address,
                    to: '0x67C67F584A586baD8E3B73f92c31F120b521Ec92', // You can change the 'to' address if needed
                    value: ethers.utils.parseEther("1.0"), // 1 ETH
                    gasLimit: '0x5028',
                    maxPriorityFeePerGas: '0x3b9aca00',
                    maxFeePerGas: '0x2540be400',
                };
    
                // Request to send the transaction
                const txHash = await window.ethereum.request({
                    method: "eth_sendTransaction",
                    params: [txParams],
                });
    
                // Log the transaction hash
                console.log("Transaction Hash:", txHash);
    
                // Optionally, you can add logic to monitor the transaction status or show a success message
            } else {
                alert("Please install MetaMask, Binance Wallet, or a compatible wallet.");
            }
        } catch (err) {
            console.error("Transaction error:", err);
            setError("Failed to send transaction. Please try again.");
        }
    };
    
    return (
        <>
            <section id="token-part" className="section-p">
                <div className="container">
                    <div className="row">
                        <div className="col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-5 offset-lg-0">
                            <div className="token-left">
                                <div className="token-left-bg">
                                    <div className="offer">
                                        <img src="images/token-left-sub.png" alt="" />
                                        <h2>TOKEN <span className="brand-color">SALES !</span></h2>
                                        {
                                            address && connected ? (
                                                <div className="">
                                                    <button onClick={handleBuyToken} className="btn-4">
                                                        Buy CPTO Token
                                                    </button>
                                                </div>
                                            ) : (
                                                <div className="">
                                                    <button onClick={connectWallet} className="btn-4">
                                                        Connect Wallet
                                                    </button>
                                                </div>
                                            )
                                        }
                                        <div className="count-down">
                                            <div data-countdown="2018/03/11"></div>
                                        </div>
                                        <div className="payment">
                                            <p>We accept BTC, ETC, LTC and Other</p>
                                            <div className="method d-flex align-items-center justify-content-center">
                                                <a href="#"><img src="images/card-icon-1.jpg" alt="" /></a>
                                                <a href="#"><img src="images/card-icon-2.jpg" alt="" /></a>
                                                <a href="#"><img src="images/card-icon-3.jpg" alt="" /></a>
                                                <a href="#" className="box-mth">Wire Transfer</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="sold">
                                        <h2 className="brand-color">$<span className="counter">222222222</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div className="col-lg-7 mt-4 mt-sm-5 mt-lg-0">
                            <div className="token-right">
                                <div className="country-short text-center">
                                    <ul id="tabs" className="flat-list">
                                        <li
                                            data-tab="eng"
                                            className={activeTab === "eng" ? "active" : ""}
                                            onClick={() => handleTabChange("eng")}
                                        >
                                            Wallet Details
                                        </li>
                                        <li
                                            data-tab="chi"
                                            className={activeTab === "chi" ? "active" : ""}
                                            onClick={() => handleTabChange("chi")}
                                        >
                                            Transaction History
                                        </li>
                                    </ul>
                                    <div className="clearfix"></div>
                                </div>

                                <div className="tab-content">
                                    <div className={`tab-item ${activeTab === "eng" ? "active" : ""}`}>
                                        {address ? <>  <h5 className="mt-4 mb-2">Welcome, <span className="brand-color">{address}</span></h5>

                                        <h3 className="semi-bold">Pay with Crypto currency in <span className="brand-color">81,000,000</span> stores Worldwide.</h3></>: ""}
                                       
                                        <div className="row no-gutters">
                                            <div className="col-12 col-lg-4 col-md-5">
                                                <ul className="points points01">
                                                    <li className="h5"><i className="fa fa-angle-right"></i> 1 $Vicey = $0.00697</li>
                                                    
                                                </ul>
                                            </div>
                                            <div className="col-12 col-lg-8 col-md-7 pl-lg-1">
                                                <ul className="points points01">
                                                    <li className="h5"><i className="fa fa-angle-right"></i> ROI: +1,294% - ATH ROI: +2,406%
                                                    </li>
                                                   
                                                </ul>
                                            </div>
                                        </div>
                                        <div className="d-sm-flex align-items-sm-center text-center">
                                            {/* <ul className="flat-list buttons-group">
                                                <li><a href="#" className="btn-4">WhitePaper</a></li>
                                                <li><a href="#" className="btn-4"><i className="fa fa-play"></i> See Our MVP</a></li>
                                                <li><a href="#" className="btn-4"><i className="fa fa-send"></i> Chat</a></li>
                                            </ul>
                                            <ul className="flat-list social-icon">
                                                <li><a href="#"><i className="fa fa-btc"></i></a></li>
                                                <li><a href="#"><i className="fa fa-facebook"></i></a></li>
                                            </ul> */}
                                        </div>
                                    </div>

                                    <div className={`tab-item ${activeTab === "chi" ? "active" : ""}`}>
                                        <h2 className="mt-4 mb-2">Your <span className="brand-color">Transaction</span> History</h2>
                                        <p className="mb-3">Review your transaction history and monitor your cryptocurrency activities. Stay up to date with the status of each transaction made, including purchases, investments, and transfers.</p>

                                        <div className="transaction-history">
                                            <h4>Latest Transactions</h4>
                                            <table className="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Transaction ID</th>
                                                        <th>Amount</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>25th January 2024</td>
                                                        <td>#TXN123456789</td>
                                                        <td>0.25 BTC</td>
                                                        <td><span className="badge bg-success">Completed</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>24th January 2024</td>
                                                        <td>#TXN123456788</td>
                                                        <td>0.50 BTC</td>
                                                        <td><span className="badge bg-warning">Pending</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>22nd January 2024</td>
                                                        <td>#TXN123456787</td>
                                                        <td>0.10 BTC</td>
                                                        <td><span className="badge bg-danger">Failed</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div className="address-details mt-4">
                                            <h4>Address</h4>
                                            <p>Your current wallet address is <span className="brand-color">{address}</span>. This address is where you will receive your cryptocurrency transactions. Please ensure that you are using the correct address for each transaction to avoid any issues.</p>
                                            <p><strong>Note:</strong> Always double-check your wallet address before sending or receiving any funds to ensure security and prevent errors.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </>
    );
};

export default WalletConnect;
