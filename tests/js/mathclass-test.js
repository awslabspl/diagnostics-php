import {a, b} from "../../Utils/js/math";
const mc = require('../../Utils/js/math');

test("A is more than 0", () => {
    return fetch(mc.a).then(a => {
        expect(a).toBeGreaterThanOrEqual(0);
    })
});

test("B is less than 1", () => {
    return fetch(mc.b).then(b => {
        expect(b).toBeLessThanOrEqual(1)
    })
});