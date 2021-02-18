/*******************************************************************************
 * All test files:: copyright (c) 2021. awslabspl
 ******************************************************************************/
import {max_length_limit, min_length_limit, username} from "../../Utils/js/sfs-client-api";

const sfs = require('stopforumspam');
const sfsca = require('../../Utils/js/sfs-client-api');

/*describe ("fun with name type", ()=>{
   test("test1", ()=>{
      // input
      const iip = sfsca.ip;
      const reqType = typeof String;
      expect(iip).toBe(reqType);
   });
});
describe("correctNameType", ()=>{
/!*    test("ip is a string", ()=>{
        expect(typeof sfsca.ip).toBe('string');

    });*!/

    test("name is a string", (t1)=>{
        var e = expect(typeof sfsca.username).toBe('string');
        if (t1){
            console.log(sfsca.username);
        } else if (!t1){
            expect(t1.fail(sfsca.username+" is NOT of type: string"));
        }
    });

    test("mail is a string", ()=>{
        expect(typeof sfsca.mail).toBe('string');
    });
});*/
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
describe("vars creation", ()=>{
    it("Should test creation of element", ()=>{
        const un = sfsca.username;
        const is = expect(un).toBeString;
    });
});