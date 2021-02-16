const utility = require('util');
exports.puts = utility.deprecate(function () {
    for (let i = 0, len = arguments.length; i < len; ++i) {
        process.stdout.write(arguments[i] + '\n');
    }
}, 'Deprecated' );