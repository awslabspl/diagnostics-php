/*
 * Copyright (c) 2021.
 */
var sfs = require('stopforumspam');
var ip = $.get("http://ipinfo.io", function(response) {
    alert(response.ip);
}, "jsonp");
var mail = "testuser@a.com";
var username = "testuser";
sfs


var user = sfs.User(ip, mail, username);