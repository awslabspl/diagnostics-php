/*******************************************************************************
 * Copyright (c) 2021. awslabspl
 ******************************************************************************
 * @type {{config: {routes: [{path: string, name: string}, {path: string, name: string}], apiKey: string, searchParameters: [{searchAdd: string, name: string, submitAdd: string}, {searchAdd: string, name: string, submitAdd: string}, {searchAdd: string, name: string, submitAdd: string}], url: string}}}
 * @summary Uses stopforumspam.com's API
 *
 * Provided values are just exemplary. Please replace them with real ones BEFORE usage.
 */
var sfs = require('stopforumspam');
export var ip = "123.123.123.123";
export var mail = "testuser@a.com";
export var username = "johnsmith";
export var userToBeTested = username;
//
export var min_length_limit = 5;
export var max_length_limit = 20;