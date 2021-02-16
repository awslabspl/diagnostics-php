const {a, b, retraction, addition, division, multiplication} = require('../../Utils/js/math');

test("a is no less than 0", ()=>{
   expect(a).not.toBeLessThan(0);
});

test("if B is not 0", ()=>{
   expect(b).not.toBe(0);
});

test("return value", ()=>{
   expect(a).toBeNumber;
});

test("return value", ()=>{
   expect(b).toBeNumber;
});

test("mock add", async() =>{
   expect(addition()).not.toBeEmpty;
});

test("mock retr", async() =>{
   expect(retraction()).not.toBeEmpty;
});

test("mock multiply", async() =>{
   expect(multiplication()).not.toBeEmpty;
});