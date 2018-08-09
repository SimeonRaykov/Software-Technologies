const Baby = require('../models').Baby;

module.exports = {
    index: (req, res) => {
        Baby.findAll()
            .then(babies => {
                res.render('baby/index.hbs', { babies:babies });
            });
    },

    createGet: (req, res) => {
        res.render('baby/create.hbs');
    },

    createPost: (req, res) => {
        let args = req.body.baby;
        Baby.create(args)
            .then((baby) => {
                res.redirect('/');
            });
    },

    editGet: (req, res) => {
        //TODO
    },

    editPost: (req, res) => {
        //TODO
    },

    deleteGet: (req, res) => {
        //TODO
    },

    deletePost: (req, res) => {
        //TODO
    }
};