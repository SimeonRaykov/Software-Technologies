const Sequelize = require('sequelize');

module.exports = function (sequelize) {
    let Baby = sequelize.define('Baby', {
        name: {
            type: Sequelize.STRING,
        },
        gender: {
            type: Sequelize.TEXT,
        },
        birthday: {
            type: Sequelize.STRING,
        }

    }, {
        timestamps: false
    });
    return Baby;
};
