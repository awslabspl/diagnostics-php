/*******************************************************************************
 * All test files:: copyright (c) 2021. awslabspl
 ******************************************************************************/
import {username} from "../../Utils/js/sfs-client-api";

const sfs = require('stopforumspam');
const sfsca = require('../../Utils/js/sfs-client-api');

test("if ip is set correctly", ()=>{
    expect(sfsca.ip).not.toBeEmpty;
});

test("name is a string", ()=>{
    expect(typeof sfsca.username).toBe('string');
});

test("mail is a string", ()=>{
    expect(typeof sfsca.mail).toBe('string');
});

test("user is in the to-be-tested group", ()=>{
    expect(sfsca.userToBeTested).toStrictEqual(username);
});

test("userToBeTested is not null/empty", ()=>{
    expect(sfsca.userToBeTested).not.toBeEmpty;
});

test("userToBeTested not less than limit", ()=>{
    expect(sfsca.userToBeTested.length).not.toBeLessThan(sfsca.length_limit);
});