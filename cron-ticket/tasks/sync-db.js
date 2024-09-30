
let times = 0;

// cron.schedule('1-59 * * * * * *', () => {
//     times++;
//     console.log('running a task every minute: ', times);
// });

const syncDB = () => {
    times++;
    console.log('tick cada multiplo de 5: ', times);
}


module.exports = {
    syncDB
}