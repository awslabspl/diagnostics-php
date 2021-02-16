/*
 * All test files:: copyright (c) 2021.
 */
import {ESM_WITH_JS_EXT, ESM_WITH_JS_EXT_URL} from "../../Utils/js/custom-loader.js";

test("constant ESM_WITH_JS_EXT is not empty", ()=>{
    expect(ESM_WITH_JS_EXT).not.toBeEmpty;
});

test("constant ESM_WITH_JS_EXT_URL is not empty", ()=>{
    expect(ESM_WITH_JS_EXT_URL).not.toBeEmpty;
});