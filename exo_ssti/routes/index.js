var express = require('express');
const url = require('url');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Express' });
});


// router.get('/lol', function(req, res, next) {
//   let recievedCom = req.query.com
//   console.log('Recieved: '.concat(recievedCom))
//   res.render('index', { title: recievedCom });
// });

router.get('/:com', function(req, res, next) {
  let recievedCom = req.params.com
  // let recievedCom = url.parse(req.url).path
  console.log('Recieved: '.concat(recievedCom))
  res.render('index', { title: recievedCom });
});

// router.get('/', function(req, res, next) {
//   let recievedCom = req.body
//   console.log('Recieved: '.concat(recievedCom))
//   res.render('index', { title: recievedCom.nom });
// });

module.exports = router;
