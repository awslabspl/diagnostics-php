const m = require('../../Utils/js/math');

test("a is no less than 0", ()=>{
   expect(m.a).not.toBeLessThan(0);
});

test("if B is not 0", ()=>{
   expect(m.b).not.toBe(0);
});