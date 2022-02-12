const { faker } = require('@faker-js/faker');
const people = require('./personGenerator.js')

//Define the data from Brazil format
faker.locale = 'pt_BR';

const tasks = []
const priorityArray = ['S', 'P1', 'P2', 'P3'];
const statusArray = ['cumprida', 'não cumprida'];

for (let i = 0; i < 5; i++) {
	const priorityValue = Math.floor(Math.random() * priorityArray.length);
	const statusValue = Math.floor(Math.random() * statusArray.length);
	const personValue = Math.floor(Math.random() * people.length);

	const person = {
		firstName: faker.name.firstName(),
		lastName: faker.name.lastName(),
		address: {
			city: faker.address.city(),
			country: faker.address.country(),
			phone: faker.phone.phoneNumber(),
			state: faker.address.stateAbbr(),
			street: faker.address.streetName(),
			zipCode: faker.address.zipCode()
		},
		birthDay: faker.date.past(),
		image: faker.image.avatar(),
		email: faker.internet.email(),
		userName: faker.internet.userName(),
		password: faker.internet.password(),
	};

	const task = {
		text: faker.lorem.paragraph(),
		date: faker.date.past(),
		comment: faker.lorem.lines(),
		status: priorityArray[priorityValue],
		priority: statusArray[statusValue],
		user: people[personValue].userName,
	}

	tasks.push(task)
	people.push(person)
}

module.exports = tasks, people;
