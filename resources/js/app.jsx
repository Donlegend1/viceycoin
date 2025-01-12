import React from "react";
import ReactDOM from "react-dom/client";

// Import your components
import WalletConnect from "./components/WalletConnect";

// Define a mapping of components to their corresponding DOM elements
const components = [
    { id: "app", Component: WalletConnect },

];

// Loop through and render components if their target element exists
components.forEach(({ id, Component }) => {
    const element = document.getElementById(id);
    if (element) {
        ReactDOM.createRoot(element).render(
            <React.StrictMode>
                <Component />
            </React.StrictMode>
        );
    }
});
