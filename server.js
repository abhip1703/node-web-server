const express = require('express');
const hbs = require('hbs');
const fs = require('fs');
const port = process.env.PORT || 3000;
var app = express();

hbs.registerPartials(__dirname + '/views/partials');
app.set('view engine', 'hbs');


app.use((req, res, next) => {
  var now = new Date().toString();
  var log = `${now}: ${req.method} ${req.url}`;
  console.log(log);
  fs.appendFileSync('server.log', log + '\n', (err) => {
    if (err) {
      console.log('Unable to append to server.log');
    }
  });
  next();
});

// app.use((req, res, next) => {
//   res.render('maintanance.hbs')
// });

app.use(express.static(__dirname + '/artisan'));
app.get('/', (req, res) => {
  res.render('index.html', {
    pageTitle: 'Home page'
  });
});
hbs.registerHelper('getCurrentYear', () => {

  return new Date().getFullYear()
});

hbs.registerHelper('screamIt', (text) => {
  return text.toUpperCase();
});

// app.get('/', (request, response) => {
//   response.render('home.hbs', {
//     pageTitle: 'Home page',
//     welcomeMessage: 'Hello there!'
//   })
// });

app.get('/about', (request, response) => {
  response.render('about.hbs', {
    pageTitle: 'About page'
  });
});

app.get('/projects', (req,res) => {
  res.render('projects.hbs', {
    pageTitle: 'Projects',

  });
});

app.get('/bad', (request, response) => {
  response.send({
    errorMessage: 'Unable to complete request'
  });
});
app.listen(port, () => {
  console.log(`server is up on port ${port}`);
});
