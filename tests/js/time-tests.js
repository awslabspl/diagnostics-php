import * as t from '../../Utils/js/generationtimes';

test("page load time as function", ()=>{
    expect(t.pageloadtime).toBeFunction;
});

test("page load is a number", ()=>{
    expect(t.pageloadtime).not.toBeNumber;
});

test("page load is not negative", ()=>{
   expect(t.pageloadtime).toBeGreaterThan(0);
});