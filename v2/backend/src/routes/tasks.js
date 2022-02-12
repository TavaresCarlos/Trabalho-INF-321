const tasks = require('../models/taskGenerator.js');

/*module.exports = function (fastify, opts, done) {
	fastify.get(
		'/',
		async (request, reply) => {
			//ERRO AQUI
			const items = await fastify.service.Tasks
				.getAllTasks();
			console.log(items)
			//reply.send(items);
			return items
		}
	)
	done()
}*/

/*module.exports = function (fastify, opts, done) {
	fastify.get(
		'/',
		async (request, reply) => {
			return { hello: 'world' }
		}
	)
	done()
}*/

module.exports = function (fastify, opts, done) {
	fastify.get(
		'/',
		async (request, reply) => {
			return tasks;
		}
	)
	done()
}
