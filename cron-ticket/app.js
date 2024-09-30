var cron = require('node-cron');

let times = 0;

cron.schedule('1-59 * * * * * *', () => {
    times++;
    console.log('running a task every minute: ', times);
});

console.log("inicio");