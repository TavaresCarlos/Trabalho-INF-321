const app = require('./src/app');
 
const port = 3000;
const host = '0.0.0.0';


//Run server
app.listen({ port, host }, () => {
	console.log(`Listening on: ${ port }`)
})
