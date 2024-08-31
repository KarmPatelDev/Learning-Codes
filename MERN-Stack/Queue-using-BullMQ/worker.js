const { Worker } = require("bullmq");

const sendEmail = () => new Promise((res, rej) => setTimeout(() => res(), 5 * 1000));

const worker = new Worker("email-queue", async (job) => {
    console.log(`Message Receiver with Job Id: ${job.id}`);
    console.log(`Sending email to ${job.data.email}`);
    await sendEmail();
    console.log("Email Sent.");
});

