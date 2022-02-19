const app = require('fastify')({ logger: true });

//Plugins
//require('@plugins/bookshelfjs')(app)

//Routes
app.register(require('./routes/tasks'), { prefix: '/' })

module.exports = app;
