const { faker } = require('@faker-js/faker');

//Define the data from Brazil format
faker.locale = 'pt_BR';

const people = [];

for (let i = 0; i < 5; i++) {
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

	people.push(person)
}

module.exports = people;
