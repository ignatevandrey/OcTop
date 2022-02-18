const { create } = require("browser-sync");
const sync = create();

const reload = done => {
    sync.reload();
    done();
};

const server = () => {
    sync.init({
        // proxy: "template",
        // ui: false,
        // notify: false
        proxy: "template-lp3.lc"
    });
};

module.exports = {
    sync,
    server,
    reload
};
