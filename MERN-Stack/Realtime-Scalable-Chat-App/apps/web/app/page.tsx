'use client'
import React, { useState } from "react";
import { useSocket } from "../context/SocketProvider";
import pageCSS from "./page.module.css";

export default function Page() {

  const { sendMessage, messages } = useSocket();

  const [message, setMessage] = useState("");

  console.log(messages);

  return (
    <div>
      <div>
        All message will appear here.
      </div>

      <div>
        <input onChange={(e) => setMessage(e.target.value)} className={pageCSS["chat-input"]} value={message} placeholder="Message..." />
        <button onClick={(e) => sendMessage(message)} className={pageCSS["button"]}>Send</button>
      </div>
    </div>
  );
};