/*
 * All test files:: copyright (c) 2021.
 */

test("if resolve is proper function", ()=>{
   const t = ()=>{
       throw new TypeError("Invalid URL: ././MyFile.js");
   };
   expect(t).toThrow(TypeError);
   expect(t).toThrow("Invalid URL: ././MyFile.js");
});