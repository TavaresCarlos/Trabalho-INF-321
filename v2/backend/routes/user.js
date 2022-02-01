module.exports = function (fastify, opts, done) {
	app.get(
		'/',
		async (request, reply) => {
			return { hello: 'world' }
		}
	)
	done()
}
