/*******************************************************************************
 * All test files:: copyright (c) 2021. awslabspl
 ******************************************************************************/
import {max_length_limit, min_length_limit, username} from "../../Utils/js/sfs-client-api";

const sfs = require('stopforumspam');
const sfsca = require('../../Utils/js/sfs-client-api');

describe("correct name type", ()=>{
    test("ip is a string", ()=>{
        expect(typeof sfsca.ip).toBe('string');
    });

    test("name is a string", ()=>{
        expect(typeof sfsca.username).toBe('string');
    });

    test("mail is a string", ()=>{
        expect(typeof sfsca.mail).toBe('string');
    });
});
describe("vars set correctly", ()=>{
    test("if ip is set correctly", ()=>{
        expect(sfsca.ip).toBeDefined();
    });

    test("if mail is set correctly", ()=>{
        expect(sfsca.mail).toBeDefined();
    });

    test("if username is set correctly", ()=>{
        expect(sfsca.username).toBeDefined();
    });
});
describe("vars within the limits", ()=>{
    test("ip not less than 15", ()=>{
       expect(sfsca.ip.length).toStrictEqual(15);
    });

    test("mail not less than 5", ()=>{
        expect(sfsca.mail.length).not.toBeLessThan(min_length_limit);
    });

    test("mail not more than 20", ()=>{
        expect(sfsca.mail.length).not.toBeGreaterThan(max_length_limit);
    });

    test("username not less than 5", ()=>{
        expect(sfsca.username.length).not.toBeLessThan(min_length_limit);
    });

    test("username not more than 20", ()=>{
        expect(sfsca.username.length).not.toBeGreaterThan(max_length_limit);
    });
});