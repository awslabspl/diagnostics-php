/*******************************************************************************
 * Copyright (c) 2021. awslabspl
 ******************************************************************************
 * @type {{config: {routes: [{path: string, name: string}, {path: string, name: string}], apiKey: string, searchParameters: [{searchAdd: string, name: string, submitAdd: string}, {searchAdd: string, name: string, submitAdd: string}, {searchAdd: string, name: string, submitAdd: string}], url: string}}}
 * @summary Uses stopforumspam.com's API
 */
var sfs = require('stopforumspam');
export var ip = document.getElementById('ip');
export var mail = "testuser@a.com";
export var username = "testuser";
export var userToBeTested = username;
//
export var length_limit = 5;