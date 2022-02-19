const tasks = require('../models/taskGenerator.js');
const people = require('../models/personGenerator.js');

const fs = require('fs')

module.exports = function (fastify, opts, done) {
	fastify.get(
		'/',
		async (request, reply) => {
			return "Server Running";
		}
	)

	fastify.get(
		'/getTasks',
		async (request, reply) => {
			return tasks;
		}
	)

	fastify.get(
		'/getPeople',
		async (request, reply) => {
			return people;
		}
	)

	done()
}
