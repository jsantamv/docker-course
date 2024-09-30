
let times = 1;

// cron.schedule('1-59 * * * * * *', () => {
//     times++;
//     console.log('running a task every minute: ', times);
// });

const syncDB = () => {
    console.log('tick cada multiplo de 5: ', times);
    return times++;
}


module.exports = {
    syncDB
}