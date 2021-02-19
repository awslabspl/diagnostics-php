/*******************************************************************************
 * All test files:: copyright (c) 2021. awslabspl
 ******************************************************************************/
const fsv = require('../../Utils/js/file-saver');

/**
 * Exported functions ONLY
 */
describe("are functions defined", ()=>{
   test("global function", ()=>{
     expect(fsv.globalFunction).toBeDefined;
   });

   test("bom", ()=>{
      expect(fsv.bom).toBeDefined;
   });

   test("download", ()=>{
      expect(fsv.download).toBeDefined;
   });

   test("save", ()=>{
       expect(fsv.saveAs).toBeDefined;
   })
});