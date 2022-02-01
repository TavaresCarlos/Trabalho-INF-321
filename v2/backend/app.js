const app = require('fastify')({ logger: true });
const tasks = require('./models/taskGenerator.js')
const user = require('./routes/user')

console.log(tasks);

//Plugins
//require('@plugins/bookshelfjs')(app)

//Routes (with Bookshelf to create the database)
//app.register(require('./routes/user'), { prefix: '/user' })

module.exports = app;
