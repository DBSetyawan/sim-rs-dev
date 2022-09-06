var express = require('express')
var cors = require('cors')
var app = express()

var whitelist = ['https://static.klaviyo.com', 'http://example2.com']
var corsOptions = {
  origin: function (origin, callback) {
    if (whitelist.indexOf(origin) !== -1) {
      callback(null, true)
    } else {
      callback(new Error('Not allowed by CORS'))
    }
 }
}