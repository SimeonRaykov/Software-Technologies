const Article = require('../models').Article;

module.exports = {
    createGet: function (req, res) {

        res.render('article/create');
    },
    createPost: function (req, res) {

        let articleArgs = req.body;

        let errorMsg = '';

        if (!req.isAuthenticated()) {

            errorMsg = 'You must be logged in to create articles!';

        }
        else if (!articleArgs.title) {
            errorMsg = 'The article must have a title!'
        }
        else if (!articleArgs.content) {
            errorMsg = 'The article must have content!';
        }

        if (errorMsg) {
            res.render('article/create', {
                error: errorMsg,
                title: articleArgs.title,
                content: articleArgs.content
            });

            return;
        }

        articleArgs.authorId = req.user.id;

        Article.create(articleArgs)
            .then(article=>{
                res.redirect('/');
            })

    },

    details:function (req,res) {

        let articleId=req.params.id;

        Article.findById(articleId)
            .then(article=>{
                res.render('article/details',article.dataValues)
            });
        
    }

};