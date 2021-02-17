/*******************************************************************************
 * All test files:: copyright (c) 2021. awslabspl
 ******************************************************************************/

const sfs = require('stopforumspam');
const sfsca = require('../../Utils/js/sfs-client-api');

test("if ip is set correctly", ()=>{
    expect(sfsca.ip).not.toBeEmpty;
});

test("name is a string", ()=>{
    expect(typeof sfsca.username).toBe('string');
});