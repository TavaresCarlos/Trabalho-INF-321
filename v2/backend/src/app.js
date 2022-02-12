const app = require('fastify')({ logger: true });
const tasks = require('./models/taskGenerator.js')

/*app.get('/', function (request, reply) {
  reply.send({ hello: 'world' })
})*/

//Plugins
//require('@plugins/bookshelfjs')(app)

//Routes
app.register(require('./routes/tasks'), { prefix: '/' })

module.exports = app;
