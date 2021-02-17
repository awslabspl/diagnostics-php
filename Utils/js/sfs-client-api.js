/*******************************************************************************
 * Copyright (c) 2021. awslabspl
 ******************************************************************************/
/*
 * Copyright (c) 2021.
 */
var sfs = require('stopforumspam');
export var ip = document.getElementById('ip');
var mail = "testuser@a.com";
export var username = "testuser";
var user = sfs.User(ip, mail, username);
