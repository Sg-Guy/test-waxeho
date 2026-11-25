import React from "react";
import ReactDOM from "react-dom/client";
import { QueryClient, QueryClientProvider } from "@tanstack/react-query";
import App from "./App";
import "./index.css";
const queryClient = new QueryClient()

ReactDOM.createRoot(document.getElementById("root")).render(
  <React.StrictMode>
    {/* Fournir le client à l'application */}
    <QueryClientProvider client={queryClient}>
        <App />
    </QueryClientProvider>
  </React.StrictMode>,
);