import {logInfo} from "../../Utils/js/projectLoggerUtility";

const inh = require('../../Utils/js/inheritance');
test("check if util subclass is imported correctly", ()=>{
    expect(inh.util).not.toBeEmpty;
}, logInfo());

test("check if EventEmmiter subclass is imported correctly", ()=>{
    expect(inh.EventEmitter).not.toBeEmpty;
}, logInfo());

test("check if stream subclass is imported correctly", ()=>{
    expect(inh.stream).not.toBeEmpty;
}, logInfo());