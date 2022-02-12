const tasks = require('../models/taskGenerator.js');

class Tasks {
	//Constructor for tasks
	/*constructor() {
		this.model = require('../models/taskGenerator.js');
	}*/
	//Get all Tasks
	async getAllTasks() {
		/*console.log("AAAAAAAAAAAAAAAAAAAAAAA")
		const tasks = require('./models/taskGenerator.js');
		console.log(tasks)
		return this.model*/
		return tasks
	}
}

module.exports = Tasks;